DROP TABLE schedule;

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE tbl_bfp;

CREATE TABLE `tbl_bfp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `establishment` text NOT NULL,
  `inspectors` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `occupancy` text NOT NULL,
  `establish_date` text NOT NULL,
  `fsic` text NOT NULL,
  `ornum` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `archive_unarchive` int(11) NOT NULL DEFAULT '1',
  `region` text NOT NULL,
  `province` text NOT NULL,
  `municipality` text NOT NULL,
  `barangay` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=284 DEFAULT CHARSET=latin1;

INSERT INTO tbl_bfp VALUES ("267","sample3","SPO4 Mark Dominic N Makil,SPO1 Allora S Alviar","sample3","s3","sample","sample","2020-06-08","RO1-056-AFS-LU-2020-","0","2435","1","01","LA UNION","AGOO","SAN AGUSTIN EAST") ;
INSERT INTO tbl_bfp VALUES ("268","sample1","SPO4 Mark Dominic N Makil,SPO1 Allora S Alviar","sample1","s1","sample1","sample","2020-06-08","RO1-056-AFS-LU-2020-","0","2435","0","01","LA UNION","AGOO","SAN MARCOS") ;
INSERT INTO tbl_bfp VALUES ("269","sample2","SPO4 Mark Dominic N Makil,SPO1 Allora S Alviar","sample2","s2","sample2","sample","2020-06-08","RO1-056-AFS-LU-2020-","0","2435","1","01","LA UNION","AGOO","SAN AGUSTIN SUR") ;
INSERT INTO tbl_bfp VALUES ("270","sample1","SPO4 Mark Dominic N Makil,SPO1 Allora S Alviar","sample1","s1","sample2","sample","2020-06-08","RO1-056-AFS-LU-2020-","0","2435","1","01","LA UNION","AGOO","SAN AGUSTIN EAST") ;
INSERT INTO tbl_bfp VALUES ("272","new","SPO1 Allora S Alviar","new","new","new","new","2020-06-08","RO1-056-AFS-LU-2020-242","42525235","242","1","01","LA UNION","ARINGAY","ALASKA") ;
INSERT INTO tbl_bfp VALUES ("275","sample3","sample sample sample sample","sample3","s","sample3","Health Care","2020-06-10","RO1-056-AFS-LU-2020-232","42525","2000","0","01","LA UNION","AGOO","MACALVA NORTE") ;
INSERT INTO tbl_bfp VALUES ("276","sample4","SPO25 Mark Anthony C Mazon","sample4","s","sample4","Residential","2020-06-10","RO1-056-AFS-LU-2020-2323","42525","2000","0","01","LA UNION","AGOO","MACALVA NORTE") ;
INSERT INTO tbl_bfp VALUES ("278","sample6","SPO1 Allora S Alviar","sample6","s","sample6","Residential","2020-06-10","RO1-056-AFS-LU-2020-23232","425252","2000","0","01","LA UNION","AGOO","MACALVA NORTE") ;
INSERT INTO tbl_bfp VALUES ("279","sample6","SPO1 Allora S Alviar","sample6","s","sample6","Residential","2020-06-10","RO1-056-AFS-LU-2020-23232","425252","2000","0","01","LA UNION","AGOO","MACALVA NORTE") ;
INSERT INTO tbl_bfp VALUES ("280","sample7","SPO1 Allora S Alviar","sample7","s","sample7","Residential","2020-06-10","RO1-056-AFS-LU-2020-23232","425252","2000","0","01","LA UNION","AGOO","MACALVA NORTE") ;
INSERT INTO tbl_bfp VALUES ("281","sample7","SPO1 Allora S Alviar","sample7","s","sample7","Residential","2020-06-10","RO1-056-AFS-LU-2020-23232","425252","2000","0","01","LA UNION","AGOO","MACALVA NORTE") ;
INSERT INTO tbl_bfp VALUES ("282","asar","SPO1 Allora S Alviar","asd","a","as","Health Care","2020-06-10","RO1-056-AFS-LU-2020-42","225","22","0","01","LA UNION","AGOO","CAPAS") ;
INSERT INTO tbl_bfp VALUES ("283","Alvin Prenda Laroya","sample sample sample sample,SPO1 Allora S Alviar","Alvin","P","Laroya","","","RO1-056-AFS-LU-2020-","0","0","1","01","","","") ;



DROP TABLE tbl_inspectors;

CREATE TABLE `tbl_inspectors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `address_location` text NOT NULL,
  `inspector_status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO tbl_inspectors VALUES ("1","SPO2","Alvin","P","Laroya","Agoo, La Union","0") ;
INSERT INTO tbl_inspectors VALUES ("2","SPO33","Denis","N","Putoza","San Agustin East","0") ;
INSERT INTO tbl_inspectors VALUES ("3","SPO25","Mark Anthony","C","Mazon","Nazareno","1") ;
INSERT INTO tbl_inspectors VALUES ("4","SPO3","Justine","P","Tanga","Agoo","1") ;
INSERT INTO tbl_inspectors VALUES ("5","SPO4","Mark Dominic","N","Makil","Consolacion Agoo, La Union","0") ;
INSERT INTO tbl_inspectors VALUES ("8","SPO1","Allora","S","Alviar","San Marcos Agoo, La Union","1") ;
INSERT INTO tbl_inspectors VALUES ("9","SPO1","Eugene","P","Laroya","San Agustin East Agoo, La Union","0") ;
INSERT INTO tbl_inspectors VALUES ("10","sample","sample","sample","sample","sample","1") ;
INSERT INTO tbl_inspectors VALUES ("11","SPO3","","","","","0") ;



DROP TABLE tbl_users;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `user_password` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `status_request` int(11) NOT NULL DEFAULT '0',
  `phone` text NOT NULL,
  `region` text NOT NULL,
  `province` text NOT NULL,
  `municipality` text NOT NULL,
  `barangay` text NOT NULL,
  `avatar` text NOT NULL,
  `position` text NOT NULL,
  `to_add` int(11) NOT NULL DEFAULT '0',
  `to_archive` int(11) NOT NULL DEFAULT '0',
  `to_respond_fsic` int(11) NOT NULL DEFAULT '0',
  `to_accept_request` int(11) NOT NULL DEFAULT '0',
  `to_switch_status` int(11) NOT NULL DEFAULT '0',
  `to_active_status` int(11) NOT NULL DEFAULT '0',
  `to_post` int(11) NOT NULL DEFAULT '0',
  `to_ban` int(11) NOT NULL DEFAULT '0',
  `to_accept_mobile_request` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO tbl_users VALUES ("25","alvinreggaelaroya@gmail.com","$2y$10$rFEYCvFEaSeVMZDCJdrzl.QYjYzMwRTrSM4ic.DqJKxCoQA6uTjp6","ALvin","P.","Laroya","1","09381453259","01","LA UNION","AGOO","SAN AGUSTIN EAST","","SPO4","1","1","0","0","0","1","0","0","0") ;
INSERT INTO tbl_users VALUES ("26","denis@yahoo.com","$2y$10$5tDSxIU3vIQ/LQkxoibZt.fUvwqCBsgWQPk.7BZyLbscxf4xUhGpO","Denis","N","Putoza","1","935385093890","01","LA UNION","AGOO","SAN AGUSTIN EAST","","SPO1","1","1","1","1","1","1","1","0","1") ;
INSERT INTO tbl_users VALUES ("27","allora@yahoo.com","$2y$10$xzVkV2hsBthsXg4ZEzoYqe.6/rabXGb0GIxRRbJObCotA8jyNGDCq","Allora","S","Alviar","1","25225252","01","LA UNION","ARINGAY","SAN MARCOS","","SPO3","0","0","0","0","0","1","0","0","0") ;
INSERT INTO tbl_users VALUES ("28","diego@yahoo.com","$2y$10$7cofHOk361THsqzVcE7HbONFeCJeP3AW2EnopSO5JwF6xaoayLw/2","Diego","S","Beligan","0","2525252","01","LA UNION","ARINGAY","PANGAO-AOAN EAST","","SPO1","0","0","0","0","0","1","0","0","0") ;
INSERT INTO tbl_users VALUES ("29","regine@yahoo.com","$2y$10$j47L04mckmnfs0xFuxUzIewp4wRMFvjTv86AlRT0qAPAi63pZw2hO","Regine","P","Laroya","0","52352352523","01","LA UNION","AGOO","SAN ANTONINO","","SPO1","1","1","0","0","1","0","1","0","1") ;
INSERT INTO tbl_users VALUES ("30","cardo@yahoo.com","$2y$10$fUQ1xnBbkk6bEVlt/AclFuYiCkLpPYKEtPqLAbj5n2hHo1FTp4SXG","Cardo","S","Dalisay","0","2525252","01","LA UNION","BALAOAN","BARACBAC ESTE","","SPO5","0","1","0","0","0","0","0","0","0") ;
INSERT INTO tbl_users VALUES ("31","justin@yahoo.com","$2y$10$UJqlG5qbpvPxCgz/sdhdSeSAfZn8IT5K7cRxJXO06Z98TFSJ7uZdG","Justin","R","Madriaga","0","23525252","01","LA UNION","AGOO","MACALVA CENTRAL","","SPO1","1","1","1","1","1","1","1","1","1") ;
INSERT INTO tbl_users VALUES ("32","eugene@yahoo.com","$2y$10$sK6Qn/yJpyCOgtS68Sbrj.BRUfZhbykCXI93MP1Re5DpPLvsiJuWS","Euguene","P","Laroya","0","252523","01","LA UNION","AGOO","CONSOLACION (POB.)","","SPO3","1","0","1","0","1","1","1","0","1") ;
INSERT INTO tbl_users VALUES ("33","constancia@yahoo.com","$2y$10$xRLdMoNdkBkW1p7du8jmT.mE8QVYaGtpkLx02bHpXThlVg4m7VRCu","Constancia","P","Laroya","1","252352","01","LA UNION","AGOO","MACALVA CENTRAL","","SPO4","1","1","1","1","1","1","1","1","1") ;
INSERT INTO tbl_users VALUES ("34","jheim@yahoo.com","$2y$10$/73wvUfB/1QocX2Olv7Smub8fNo2LKhkAV/Hz.K.YulKuUF56kWEC","Jheim","V","Viallanueva","0","25235235","01","LA UNION","AGOO","SAN AGUSTIN SUR","","SPO5","1","1","1","1","1","1","1","1","1") ;
INSERT INTO tbl_users VALUES ("35","","$2y$10$aos8yippygKFefjnW4kdj.qPwEt2Jb1KmyFcaykgtmhdbRluKbnpS","fwfw","","","0","","","","","","","SPO5","1","1","1","1","1","0","1","1","1") ;



