
ALTER TABLE products ADD COLUMN image VARCHAR(255);

UPDATE products SET image = 'images/apple.jpg' WHERE name = 'Apple';
UPDATE products SET image = 'images/banana.jpg' WHERE name = 'Banana';
UPDATE products SET image = 'images/milk.jpg' WHERE name = 'Milk';
UPDATE products SET image = 'images/bread.jpg' WHERE name = 'Bread';
UPDATE products SET image = 'images/eggs.jpg' WHERE name = 'Eggs';
UPDATE products SET image = 'images/orange.jpg' WHERE name = 'Orange';
UPDATE products SET image = 'images/chickenbreast.jpg' WHERE name = 'Chicken Breast';
UPDATE products SET image = 'images/rice.jpg' WHERE name = 'Rice';
UPDATE products SET image = 'images/pasta.jpg' WHERE name = 'Pasta';
UPDATE products SET image = 'images/cheese.jpg' WHERE name = 'Cheese';
UPDATE products SET image = 'images/butter.jpg' WHERE name = 'Butter';
UPDATE products SET image = 'images/yogurt.jpg' WHERE name = 'Yogurt';
UPDATE products SET image = 'images/tomato.jpg' WHERE name = 'Tomato';
UPDATE products SET image = 'images/potato.jpg' WHERE name = 'Potato';
UPDATE products SET image = 'images/onion.jpg' WHERE name = 'Onion';
UPDATE products SET image = 'images/lettuce.jpg' WHERE name = 'Lettuce';
UPDATE products SET image = 'images/cucumber.jpg' WHERE name = 'Cucumber';
UPDATE products SET image = 'images/carrot.jpg' WHERE name = 'Carrot';
UPDATE products SET image = 'images/peppers.jpg' WHERE name = 'Peppers';
UPDATE products SET image = 'images/grapes.jpg' WHERE name = 'Grapes';
-- Repeat for other products
