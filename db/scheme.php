CREATE TABLE siswa (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama_siswa varchar(255),
    kelas varchar(255),
);
CREATE TABLE guru (
    id int NOT NULL AUTO_INCREMENT,
    nama_guru varchar(255)
);
CREATE TABLE mata_pelajaran (
    id int NOT NULL AUTO_INCREMENT,
    nama_mapel varchar(255)
);