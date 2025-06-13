CREATE TABLE snacks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    sugar FLOAT NOT NULL,
    fat FLOAT NOT NULL,
    calories FLOAT NOT NULL,
    evaluation VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO snacks (name, sugar, fat, calories, evaluation) VALUES
('Keripik Kentang', 15.0, 10.0, 180.0, 'Tidak Sehat'),
('Popcorn Tawar', 1.0, 2.0, 50.0, 'Sehat'),
('Biskuit Cokelat', 12.0, 8.0, 150.0, 'Tidak Sehat'),
('Buah Kering', 5.0, 0.5, 90.0, 'Sehat'),
('Keripik Singkong', 8.0, 5.0, 120.0, 'Cukup Sehat'),
('Brownies', 20.0, 15.0, 250.0, 'Tidak Sehat'),
('Yogurt Rendah Lemak', 4.0, 2.5, 80.0, 'Sehat'),
('Camilan Kacang', 3.0, 10.0, 160.0, 'Cukup Sehat'),
('Donat Gula', 22.0, 12.0, 300.0, 'Tidak Sehat'),
('Kerupuk Udang', 2.0, 3.0, 100.0, 'Sehat');
