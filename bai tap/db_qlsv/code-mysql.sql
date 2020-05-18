DROP DATABASE IF EXISTS db_qlsv;
CREATE DATABASE db_qlsv CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE db_qlsv;

CREATE TABLE tbl_nganh (
    ma_nganh varchar(10) NOT NULL,
    ten_nganh varchar(255) NOT NULL,
    PRIMARY KEY(ma_nganh)
);

CREATE TABLE tbl_monhoc (
    ma_monhoc varchar(10) NOT NULL,
    ten_monhoc varchar(255) NOT NULL,
    tinchi_lythuyet int NOT NULL,
    tinchi_thuchanh int NOT NULL,
    PRIMARY KEy(ma_monhoc)
);

CREATE TABLE tbl_lop (
    ma_lop varchar(10) NOT NULL,
    ten_lop varchar(255) NOT NULL,
    ma_nganh varchar(10) NOT NULL,
    PRIMARY KEY(ma_lop),
    FOREIGN KEY(ma_nganh) REFERENCES tbl_nganh(ma_nganh)
);

CREATE TABLE tbl_sinhvien (
    ma_sinhvien varchar(10) NOT NULL,
    ten_sinhvien varchar(255) NOT NULL,
    namsinh Date NOT NULL,
    quequan varchar(255),
    ma_lop varchar(10) NOT NULL,
    PRIMARY KEY(ma_sinhvien),
    FOREIGN KEY(ma_lop) REFERENCES tbl_lop(ma_lop)
);

CREATE TABLE tbl_sinhvien_monhoc (
    ma_sinhvien varchar(10) NOT NULL,
    ma_monhoc varchar(10) NOT NULL,
    hocki_nienkhoa varchar(20) NOT NULL,
    diem double NOT NULL,
    PRIMARY KEY(ma_sinhvien, ma_monhoc, hocki_nienkhoa)
);