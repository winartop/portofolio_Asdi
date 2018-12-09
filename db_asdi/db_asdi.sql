USE asdi

-- ===========================================================
-- query untuk admin
SELECT * FROM admin

-- memasukan data admin
INSERT INTO admin VALUES
-- id,nama,password,email,foto
('A001','admin','1234','admin@asdi.co.id','admin.jpg');
-- ===========================================================

-- ===========================================================
-- query untuk alumni
SELECT * FROM alumni
-- memasukan data alumni

INSERT INTO alumni VALUES 
/* nim,nama,JK,tempatLahir,tahunlhr,prodi,tahunMasuk
tahunLulus,alamat,hp,email,tempatkerja,password,foto*/
('5130411201', 'koko', 'L', 'sleman', '1994-12-04', 'DKV', '2013', 
'2016', 'jl. Kaliurang no 44','081234235290', 'admin2asdi.ac.id', 
'studio kita', '12345', 'alumni.jpg');




