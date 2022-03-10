ALTER TABLE artists
ADD COLUMN country varchar(100);

ALTER TABLE customers
ADD COLUMN rating integer CHECK (rating between 1 and 10);
