ALTER TABLE Author 
ADD author_sum_rating integer DEFAULT 0;

CREATE TRIGGER update_author_sum_rating
AFTER UPDATE OF Rating ON Book 
FOR EACH ROW
EXECUTE PROCEDURE update_author_sum_rating();