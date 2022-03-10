INSERT INTO customers(id, name, address, amount)
VALUES
  (1, 'John', 'Ottawa', 8.5),
  (2, 'Amy', 'Orleans', 9.0),
  (3, 'Peter', 'Gatineau', 6.3);

INSERT INTO artists(name, birthplace, style, dateofbirth)
VALUES
  ('Caravaggio', 'Milan', 'Baroque', '1571-09-28' ),
  ('Smith', 'Ottawa', 'Modern', '1977-12-12'),
  ('Picasso', 'Malaga', 'Cubism', '1881-10-25');

INSERT INTO artworks(title, year, type, price, artist_name)
VALUES
  ('Blue', 2000, 'Modern', 10000.00, 'Smith'),
  ('The Cardsharps', 1594, 'Baroque', 40000.00, 'Caravaggio');
