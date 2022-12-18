CREATE TABLE akun(
    akun_id int NOT NULL AUTO_INCREMENT,
    nama varchar(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    admin BOOLEAN DEFAULT FALSE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT akun_id PRIMARY KEY (akun_id)
);

CREATE TABLE peserta(
    peserta_id int NOT NULL AUTO_INCREMENT,
    NIK varchar(50) NOT NULL UNIQUE,
    NomorPeserta varchar(50) NOT NULL UNIQUE,
    Nama varchar(50) NOT NULL,
    JenisKelamin BOOLEAN,  
    TempatLahir varchar(50) NOT NULL,
    TanggalLahir DATE,
    KualifikasiPendidikan varchar(50) NOT NULL,
    Foto varchar(50) NOT NULL UNIQUE,
    Terverifikasi BOOLEAN DEFAULT FALSE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT peserta_id PRIMARY KEY (peserta_id)
);