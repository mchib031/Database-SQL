BEGIN;
ALTER TABLE artworks
DROP CONSTRAINT artworks_artist_name_fkey;

ALTER TABLE artworks
ADD CONSTRAINT artworks_artist_name_fkey
FOREIGN KEY (artist_name) REFERENCES artists(name)
ON DELETE CASCADE
ON UPDATE CASCADE;

COMMIT;
