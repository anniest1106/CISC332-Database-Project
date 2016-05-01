<html>
<head><title>Load Car Share Database</title></head>
<body>

<?php
/* Program: createTable.php
 * Desc:    Creates and loads the car share database tables
 *          with sample data.
 */
 
 $host = "localhost";
 $user = "anniest1106";
 $password = "Smpss8406";
 $database = "carshare";

 $cxn = mysqli_connect($host,$user,$password, $database);
 // Check connection
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  die();
  }
   
$cxn = mysqli_connect($host,$user,$password, $database);
 // Check connection
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  die();
  }
   
   mysqli_query($cxn,"drop table Car;");
   mysqli_query($cxn,"drop table Member;");
   mysqli_query($cxn,"drop table Admin");
   mysqli_query($cxn,"drop table Reservation;");
   mysqli_query($cxn,"drop table MemberRentalHistory;");
   mysqli_query($cxn,"drop table Mem_History;");
   mysqli_query($cxn,"drop table CarRentalHistory;");
   mysqli_query($cxn,"drop table Car_history;");
   mysqli_query($cxn,"drop table Location;");
   mysqli_query($cxn,"drop table Comment;");
   mysqli_query($cxn,"drop table Writes;");
   mysqli_query($cxn,"drop table Makes;");
   mysqli_query($cxn,"drop table Located_at;");
   


   mysqli_query($cxn,"CREATE TABLE Car(
                VIN                       VARCHAR(40)    NOT NULL,
                Make                      CHAR(20)       NOT NULL,
                Model                     CHAR(20)       NOT NULL,
                Year                      YEAR           NOT NULL,
                CurrentStatus             CHAR(20)       NOT NULL,
                LastOdomterReading        INTEGER,
                LastGasTankReading        INTEGER,
                DateMaintain              DATE,
                MaintainOdomterReading    INTEGER,
                PRIMARY KEY (VIN));");

   mysqli_query($cxn,"CREATE TABLE Member (
                MemberNO             INTEGER        NOT NULL,
                License              VARCHAR(40)    NOT NULL,
                Name                 CHAR(20)       NOT NULL,
                Address              VARCHAR(40)	NOT NULL,
                Phone                BIGINT         NOT NULL,
                Email                VARCHAR(40)	NOT NULL,
                CreditCardNumber     BIGINT         NOT NULL,
                ExpireDate           DATE	        NOT NULL,
                RegAnniversary       DATE	        NOT NULL,
                MembershipFee        INTEGER	    NOT NULL,
                UsageFee             INTEGER	    NOT NULL,
                Password             VARCHAR(40)    NOT NULL,
				PRIMARY KEY (MemberNO, License));");
				
	mysqli_query($cxn,"CREATE TABLE Admin(
                ID                       BIGINT    NOT NULL,
                Name                     CHAR(20)       NOT NULL,
				Position	CHAR(20)	NOT NULL,		
				Password	VARCHAR(40)	NOT NULL,
                PRIMARY KEY (ID));");			


   mysqli_query($cxn,"CREATE TABLE Reservation(
                ReservationNum       VARCHAR(40)    NOT NULL,
                PickUPDate           DATE	        NOT NULL,
                PickUPTime           TIME	        NOT NULL,
                ReturnDate           DATE	        NOT NULL,
                ReturnTime           TIME	        NOT NULL,
                ReservationStatus    CHAR(20)	    NOT NULL,
                PRIMARY KEY (ReservationNum));");
 
   mysqli_query($cxn,"CREATE TABLE MemberRentalHistory(
                ReservationNum       VARCHAR(40)    NOT NULL,
                MemberNO             INTEGER        NOT NULL,
                PRIMARY KEY (ReservationNum),
				FOREIGN KEY (ReservationNum) REFERENCES Reservation(ReservationNum),
				FOREIGN KEY (MemberNO) REFERENCES Member(MemberNO))");

   mysqli_query($cxn,"CREATE TABLE CarRentalHistory(
                ReservationNum       VARCHAR(40)    NOT NULL,
                PickUPOdoread        INTEGER	    NOT NULL,
                ReturnOdoread        INTEGER	    NOT NULL,
                PRIMARY KEY (ReservationNum),
				FOREIGN KEY (ReservationNum) REFERENCES Reservation(ReservationNum));");
               
   mysqli_query($cxn,"CREATE TABLE Car_history(
                ReservationNum       VARCHAR(40)       NOT NULL,
                VIN                  VARCHAR(40)       NOT NULL,
                PRIMARY KEY (ReservationNum, VIN),
				FOREIGN KEY (VIN) REFERENCES Car(VIN),
				FOREIGN KEY (ReservationNum) REFERENCES CarRentalHistory(ReservationNum));");
                
   mysqli_query($cxn,"CREATE TABLE Location(
                Address              VARCHAR(40)	NOT NULL,
                NumSpace             INTEGER	    NOT NULL,
                PRIMARY KEY (Address));"); 
				
   mysqli_query($cxn,"CREATE TABLE Comment(
				CommentID					INTEGER			NOT NULL,
                Topic                VARCHAR(40)    NOT NULL,
                Comment             VARCHAR(1000)   NOT NULL,
				PRIMARY KEY (CommentID),
				FOREIGN KEY (Topic) REFERENCES Car(VIN));");				
   
   mysqli_query($cxn,"CREATE TABLE Writes(
                CommentID                INTEGER   NOT NULL,
                MemberNO             INTEGER       NOT NULL,
                FOREIGN KEY (CommentID) REFERENCES Comment(CommentID),
				FOREIGN KEY (MemberNO) REFERENCES Member(MemberNO));");
				
	mysqli_query($cxn,"CREATE TABLE Reply(
                CommentID      INTEGER   NOT NULL,
                ID             BIGINT       NOT NULL,
				Reply             VARCHAR(1000)   NOT NULL,
				FOREIGN KEY (CommentID) REFERENCES Comment(CommentID),
				FOREIGN KEY (ID) REFERENCES Admin(ID));");
   
   mysqli_query($cxn,"CREATE TABLE Makes(
                ReservationNum       VARCHAR(40)    NOT NULL,
                VIN                  VARCHAR(40)    NOT NULL,
                MemberNO             INTEGER        NOT NULL,
				PRIMARY KEY (ReservationNum,VIN,MemberNO),
				FOREIGN KEY (ReservationNum) REFERENCES Reservation(ReservationNum),
				FOREIGN KEY (VIN) REFERENCES Car(VIN),
				FOREIGN KEY (MemberNO) REFERENCES Member(MemberNO));");
   
   mysqli_query($cxn,"CREATE TABLE Located_at(
                Address		VARCHAR(40)     NOT NULL,
                VIN			VARCHAR(40)	    NOT NULL,
                PRIMARY KEY (Address, VIN),
				FOREIGN KEY (Address) REFERENCES Location(Address),
				FOREIGN KEY (VIN) REFERENCES Car(VIN));");
				
   //VIN, MAKE, Model, Year, CurrentStatus, LastOdomterReading, LastGasTankReading, Date, OdomterReading
   mysqli_query($cxn,"insert into Car values
            ('A123', 'Porsche', 'Cayenne', 2009, 'in-use', 6000, 9, '2014-10-12', 178),
            ('B345', 'Jeep', 'Wrangler', 2010, 'available', 128, 5, '2012-03-30', 65),
            ('C789', 'BMW', 'X3', 2011, 'out-for-maintenance', 120, 6, '2015-01-07', 98),
            ('D126', 'BMW', 'X6', 2012, 'available', 200, 5, '2014-11-20', 200),
			('E321', 'BMW', 'X4', 2012, 'available', 200, 5, '2014-11-20', 200);");

   //MemberNO, License, Name, Address, Phone, Email, CreditCardNumber, ExpireDate, RegAnniversary,MembershipFee, UsageFee
   mysqli_query($cxn,"insert into Member values
            (12345678, 'WAN-123', 'Ferdinand Andres', '478 xxx St', 6131237899, 'birdinand@live.co.uk', 4520111188887467, '2018-09-00', '2015-01-12', 100, 56,'abc123'),
            (56780990, 'HBX-499', 'Faolan Crowe', '1231 Walson Ave', 6047897901, 'fcrowe@gmail.com', 4520978621098123, '2020-01-00', '2015-07-29', 70, 78,'crowe456'),
            (19734130, 'ASS-566', 'Isaiah Hall', '89 Abc St', 6139723632, 'i.hall@cs.queensu.ca', 4520129873019281, '2017-07-00', '2015-09-09', 50, 39, 'hallya789');");
  
   // ID, Name, Position, Password 
    mysqli_query($cxn, "insert into Admin values
            (54321, 'Tom Smith', 'Manager', 'abc234'),
            (56789, 'Andrea Kang', 'Staff', 'gce567'),
            (67890, 'Brad Pitt', 'Staff', 'mcat2015');");
			
   // ReverservationNum, PickUPDate, PickUPTime, ReturnDate, ReturnTime, ReservationStatus
   mysqli_query($cxn,"insert into Reservation values
            ('12345678', '2015-06-01', '12:00:00', '2015-06-03', '12:00:00', 'returned'),
            ('98765432', '2015-03-22', '10:30:00', '2015-03-28', '13:30:00', 'successful'),
            ('34567890', '2015-04-29', '15:00:00', '2015-05-04', '14:30:00', 'returned');");
    
    // ReservationNum, MemberNO
    mysqli_query($cxn, "insert into MemberRentalHistory values
            ('12345678', 19734130),
            ('98765432', 12345678),
            ('34567890', 56780990);");
    
    // ReservationNum, PickUPOdoread, ReturnOdoread
    mysqli_query($cxn, "insert into CarRentalHistory values
            ('12345678', 250, 6000),
            ('98765432', 0, 0),
            ('34567890', 120, 250);");
            
    // ReservationNum, VIN
    mysqli_query($cxn, "insert into Car_history values
            ('12345678', 'A123'),
            ('98765432','B345'),
            ('34567890','C789');");
    
    // Address, NumSpace
    mysqli_query($cxn, "insert into Location values
            ('310 Bay St', 20),
            ('198 Young Ave', 17),
            ('23 AX St', 35);");
            
    //CommentID, Topic,Comment
    mysqli_query($cxn, "insert into Comment values
            (1234, 'A123', 'Thank you for letting me have a wonderful trip.'),
            (5678, 'C789', 'The car is really comfortable, my family and I have a lot of fun.');");
    
    //CommentID, MemberNO
    mysqli_query($cxn, "insert into Writes values
            (1234, 19734130),
            (5678, 56780990);");
			
	//CommentID, ID, Reply
	mysqli_query($cxn, "insert into Reply values
            (1234, 54321, 'Thank you for the comment!'),
            (5678, 56789, 'Thank you for choosing KTCS!');");
    
    //ReservationNum, VIN, MemberNO
    mysqli_query($cxn, "insert into Makes values
			('12345678', 'A123', 56780990),
            ('98765432', 'B345', 12345678),
			('34567890','C789', 56780990);");
    
    //Address, VIN
    mysqli_query($cxn, "insert into Located_at values
            ('310 Bay St','A123'),
            ('198 Young Ave','C789'),
            ('23 AX St','B345'),
            ('310 Bay St', 'D126'),
			('310 Bay St', 'E321');");

   mysqli_close($cxn); 

echo "Database created.";

?>
</body></html>
