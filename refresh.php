INSERT INTO inventory (product_name)
SELECT product_name
FROM shelf
WHERE condition;