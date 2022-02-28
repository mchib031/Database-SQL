SELECT course_name,
split_part(semester,'-',1) session,
split_part(semester,'-',2) année,
* FROM courses;
