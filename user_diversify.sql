ALTER TABLE 'users'

  ADD KEY 'type_id' ('type_id');



CREATE TABLE IF NOT EXISTS 'myuserstypes' (
  'type_id' int(11) NOT NULL,
  'role' varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE 'myuserstypes'
  ADD PRIMARY KEY ('type_id');
COMMIT;


ALTER TABLE 'users'
  ADD CONSTRAINT 'myusers_ibfk_1' FOREIGN KEY ('type_id') REFERENCES 'myuserstypes' ('type_id');
COMMIT;