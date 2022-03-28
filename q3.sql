CREATE TRIGGER check_book_rating
    BEFORE UPDATE ON Book
    FOR EACH ROW 
    EXECUTE PROCEDURE check_book_rating();