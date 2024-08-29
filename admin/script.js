document.getElementById('pos-form').addEventListener('submit', function(event) {
    event.preventDefault();

    let barcode = document.getElementById('barcode').value;

    fetch('process_sale.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `barcode=${barcode}`
    })
    .then(response => response.json())
    .then(data => {
        let receiptContent = document.getElementById('receipt-content');
        if (data.status === 'success') {
            receiptContent.innerHTML = `
                <p>Product: ${data.product}</p>
                <p>Price: $${data.price}</p>
                <p>Quantity: ${data.quantity}</p>
                <p>Total: $${data.total_price}</p>
            `;
        } else {
            receiptContent.innerHTML = `<p>${data.message}</p>`;
        }
    });

    document.getElementById('barcode').value = '';
});

function printReceipt() {
    let receiptContent = document.getElementById('receipt-content').innerHTML;
    let printWindow = window.open('', '', 'width=400,height=600');
    printWindow.document.write('<html><head><title>Receipt</title></head><body>');
    printWindow.document.write(receiptContent);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
}
