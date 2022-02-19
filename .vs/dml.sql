Use university
INSERT INTO `faculty` (`fid`, `fname`, `f_designation`, `studies`, `dept_id`) 
VALUES ('1', ' Dan Brown', 'Head of the department', 'PHD Computers', ' CSE');

INSERT INTO `faculty` (`fid`, `fname`, `f_designation`, `studies`, `dept_id`)
VALUES ('2', 'Dav Pilkey', 'Professor', 'PHD Computers', ' CSE');

INSERT INTO `faculty` (`fid`, `fname`, `f_designation`, `studies`, `dept_id`)
VALUES ('3', ' Connie Willis', ' Assistant Professor', 'PHD Computers', 'CSE');

INSERT INTO `registration` (`unh_id`, `First`, `Last`, `Email`, `department`, `specialization`, `major_proj`, `fid`, `status`,`feedback`) 
VALUES ('vd1034', 'vaishnavi', 'dade', 'vaishnavi@gmail.com', 'CSE', 'DATA SCIENCE', 'Coronavirus visualizations', '1', NULL, NULL);

INSERT INTO `registration` (`unh_id`, `First`, `Last`, `Email`, `department`, `specialization`, `major_proj`, `fid`, `status`, `feedback`) 
VALUES ('11', 'snehitha', 'mamidi', 'snehtha@gmail.com', 'CSE', 'PYTHON', 'DJANGO', '2', NULL, NULL);

INSERT INTO `registration` (`unh_id`, `First`, `Last`, `Email`, `department`, `specialization`, `major_proj`, `fid`, `status`, `feedback`) 
VALUES ('A12', 'AKILA', 'REDDY', 'akila@gmail.com', 'CSE', 'JAVA', 'ATM Interface', '3', NULL, NULL);

UPDATE registration SET status= "completed" , feedback= 'Good work. project completed'  WHERE unh_id = 'vd1034';

SELECT * FROM registration JOIN faculty ON registration.fid = faculty.fid ;

DELETE FROM registration WHERE unh_id='vd1034';