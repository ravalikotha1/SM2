CREATE TABLE MARA
(
  Material_id INT NOT NULL,
  Description VARCHAR(45) NOT NULL,
  Material_flag INT NOT NULL,
  UOM CHAR(10) NOT NULL,
  PRIMARY KEY (Material_id)
);

CREATE TABLE Storage
(
  Storage_id INT NOT NULL,
  Description VARCHAR(45) NOT NULL,
  Street1 VARCHAR(45) NOT NULL,
  Street2 VARCHAR(45) NOT NULL,
  State CHAR(20) NOT NULL,
  City CHAR(20) NOT NULL,
  zipcode INT NOT NULL,
  Country CHAR(20) NOT NULL,
  PRIMARY KEY (Storage_id)
);

CREATE TABLE Plant
(
  plant_id INT NOT NULL,
  description VARCHAR(45) NOT NULL,
  street1 VARCHAR(45) NOT NULL,
  street2 VARCHAR(45) NOT NULL,
  city VARCHAR(20) NOT NULL,
  state VARCHAR(20) NOT NULL,
  zipcode INT NOT NULL,
  PRIMARY KEY (plant_id)
);

CREATE TABLE plantmat
(
  quantity INT NOT NULL,
  Material_id INT NOT NULL,
  plant_id INT NOT NULL,
  Storage_id INT NOT NULL,
  PRIMARY KEY (Material_id, plant_id, Storage_id),
  FOREIGN KEY (Material_id) REFERENCES MARA(Material_id),
  FOREIGN KEY (plant_id) REFERENCES Plant(plant_id),
  FOREIGN KEY (Storage_id) REFERENCES Storage(Storage_id)
);

CREATE TABLE States&tax
(
  %tax INT NOT NULL,
  State CHAR(20) NOT NULL,
  Material_id INT NOT NULL,
  PRIMARY KEY (State),
  FOREIGN KEY (Material_id) REFERENCES MARA(Material_id)
);

CREATE TABLE Vendor
(
  Vendor_id INT NOT NULL,
  Vendor_name VARCHAR(45) NOT NULL,
  Street1 VARCHAR(45) NOT NULL,
  Street2 VARCHAR(45) NOT NULL,
  city CHAR(20) NOT NULL,
  zipcode INT NOT NULL,
  country CHAR(20) NOT NULL,
  State CHAR(20) NOT NULL,
  PRIMARY KEY (Vendor_id),
  FOREIGN KEY (State) REFERENCES States&tax(State)
);

CREATE TABLE suppliers
(
  Price INT NOT NULL,
  Material_id INT NOT NULL,
  Vendor_id INT NOT NULL,
  PRIMARY KEY (Material_id, Vendor_id),
  FOREIGN KEY (Material_id) REFERENCES MARA(Material_id),
  FOREIGN KEY (Vendor_id) REFERENCES Vendor(Vendor_id)
);

CREATE TABLE Membership
(
  Membership_id INT NOT NULL,
  Description VARCHAR(45) NOT NULL,
  Startdate DATE NOT NULL,
  EndDate DATE NOT NULL,
  PRIMARY KEY (Membership_id)
);

CREATE TABLE Customer
(
  Cust_id INT NOT NULL,
  fname CHAR(20) NOT NULL,
  lname CHAR(20) NOT NULL,
  age INT NOT NULL,
  gender CHAR(15) NOT NULL,
  email VARCHAR(45) NOT NULL,
  contact INT NOT NULL,
  Street1 VARCHAR(45) NOT NULL,
  Street2 VARCHAR(45) NOT NULL,
  City CHAR(20) NOT NULL,
  State CHAR(20) NOT NULL,
  Zipcode INT NOT NULL,
  Membership_id INT NOT NULL,
  PRIMARY KEY (Cust_id),
  FOREIGN KEY (Membership_id) REFERENCES Membership(Membership_id)
);

CREATE TABLE Ratings
(
  Ratings INT NOT NULL,
  Description VARCHAR(45) NOT NULL,
  Date DATE NOT NULL,
  Cust_id INT NOT NULL,
  Material_id INT NOT NULL,
  PRIMARY KEY (Cust_id, Material_id),
  FOREIGN KEY (Cust_id) REFERENCES Customer(Cust_id),
  FOREIGN KEY (Material_id) REFERENCES MARA(Material_id)
);

CREATE TABLE PR
(
  PR_ID INT NOT NULL,
  Description VARCHAR(45) NOT NULL,
  Date DATE NOT NULL,
  Material_id INT NOT NULL,
  Vendor_id INT NOT NULL,
  PRIMARY KEY (PR_ID),
  FOREIGN KEY (Material_id, Vendor_id) REFERENCES suppliers(Material_id, Vendor_id)
);

CREATE TABLE PO
(
  PO_ID INT NOT NULL,
  Description VARCHAR(45) NOT NULL,
  Date DATE NOT NULL,
  PR_ID INT NOT NULL,
  Material_id INT NOT NULL,
  PRIMARY KEY (PO_ID),
  FOREIGN KEY (PR_ID) REFERENCES PR(PR_ID),
  FOREIGN KEY (Material_id) REFERENCES MARA(Material_id)
);

CREATE TABLE Employee
(
  EmpID INT NOT NULL,
  fname CHAR(20) NOT NULL,
  lname CHAR(20) NOT NULL,
  designation CHAR(20) NOT NULL,
  DOJ DATE NOT NULL,
  salary INT NOT NULL,
  PRIMARY KEY (EmpID)
);

CREATE TABLE SO
(
  SO_ID INT NOT NULL,
  Description VARCHAR(45) NOT NULL,
  BillingAddr VARCHAR(45) NOT NULL,
  BillingAddr2 VARCHAR(45) NOT NULL,
  City CHAR(20) NOT NULL,
  State CHAR(20) NOT NULL,
  zipcode INT NOT NULL,
  email VARCHAR(20) NOT NULL,
  contact INT NOT NULL,
  Cust_id INT NOT NULL,
  PRIMARY KEY (SO_ID),
  FOREIGN KEY (Cust_id) REFERENCES Customer(Cust_id)
);

CREATE TABLE Transactions
(
  Transaction_id INT NOT NULL,
  Date DATE NOT NULL,
  Cust_id INT NOT NULL,
  SO_ID INT NOT NULL,
  PRIMARY KEY (Transaction_id),
  FOREIGN KEY (Cust_id) REFERENCES Customer(Cust_id),
  FOREIGN KEY (SO_ID) REFERENCES SO(SO_ID)
);

CREATE TABLE logins
(
  password INT NOT NULL,
  username INT NOT NULL,
  PRIMARY KEY (username),
  FOREIGN KEY (username) REFERENCES Employee(EmpID)
);