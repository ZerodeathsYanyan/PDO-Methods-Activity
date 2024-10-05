CREATE TABLE Tricycles (
    tricycle_id INT PRIMARY KEY,
    model VARCHAR,
    manufacturer VARCHAR,
    association VARCHAR,
    color VARCHAR,
    engine_number VARCHAR,
    plate_number VARCHAR
);

CREATE TABLE Owners (
    owner_id INT PRIMARY KEY,
    first_name VARCHAR,
    last_name VARCHAR,
    address VARCHAR,
    phone_number VARCHAR,
    email VARCHAR
);

CREATE TABLE Registrations (
    registration_id INT PRIMARY KEY,
    tricycle_id INT,
    owner_id INT,
    registration_date DATE,
    expiry_date DATE
);

CREATE TABLE MaintenanceRecords (
    maintenance_id INT PRIMARY KEY,
    tricycle_id INT,
    service_date DATE,
    service_type VARCHAR,
    cost DECIMAL(10, 2),
    service_center VARCHAR
);

CREATE TABLE Accidents (
    accident_id INT PRIMARY KEY,
    tricycle_id INT,
    date DATE,
    city VARCHAR,
    description TEXT,
    damage_cost DECIMAL(10, 2)
);


INSERT INTO Tricycles (tricycle_id, model, manufacturer, association, color, engine_number, plate_number)
VALUES
(1, 'KYMCO KAGARDOR 150', 'KYMCO Manufacturing', 'NIght Time Services Limited Tricycle Operators and Drivers Association (NTSTODA)', 'Pink', 'EN123456789', 'ABC1234'),
(2, 'HONDA TMX 125 ALPHA', 'Honda Motors', 'Kinalapan-Pingit Tricycle Operators and Drivers Association (KIPTODA)', 'Brown', 'EN987654321', 'XYZ5678'),
(3, 'KAWASAKI CT150', 'Kawasaki Heavy Industries', 'Reserva Tricycle Operators and Drivers Association (RETODA)', 'Green', 'EN112233445', 'LMN3456'),
(4, 'YAMAHA YTX 125', 'Yamaha Corporation', 'Buhangin Reserva Tricycle Operators and Drivers Association (BARTA)', 'Yellow', 'EN556677889', 'OPQ7890'),
(5, 'HONDA TMX Supremo', 'Honda Motors', 'Suklayin Tricycle Operators and Drivers Association (SUKTODA)', 'Silver', 'EN998877665', 'RST1234');

INSERT INTO Owners (owner_id, first_name, last_name, address, phone_number, email)
VALUES
(1, 'Juan', 'Dela Cruz', '123 Main St, Manila', '09171234567', 'juan@gmail.com'),
(2, 'Maria', 'Santos', '456 Elm St, Quezon', '09179876543', 'maria@gmail.com'),
(3, 'Pedro', 'Reyes', '789 Pine St, Makati', '09171239876', 'pedro@gmail.com'),
(4, 'Ana', 'Garcia', '101 Maple St, Pasig', '09179871234', 'ana@gmail.com'),
(5, 'Luis', 'Martinez', '202 Oak St, Taguig', '09171234598', 'luis@gmail.com');

INSERT INTO Registrations (registration_id, tricycle_id, owner_id, registration_date, expiry_date)
VALUES
(1, 1, 1, '2023-01-15', '2024-01-15'),
(2, 2, 2, '2023-02-20', '2024-02-20'),
(3, 3, 3, '2023-03-25', '2024-03-25'),
(4, 4, 4, '2023-04-30', '2024-04-30'),
(5, 5, 5, '2023-05-05', '2024-05-05');

INSERT INTO MaintenanceRecords (maintenance_id, tricycle_id, service_date, service_type, cost, service_center)
VALUES
(1, 1, '2023-03-10', 'Oil Change', 500.00, 'Drift Xaust'),
(2, 2, '2023-04-05', 'Tire Change', 1200.00, 'Motech'),
(3, 3, '2023-05-15', 'Brake Replacement', 1500.00, 'Goodyear Servitek'),
(4, 4, '2023-06-20', 'Engine Tune-Up', 2000.00, 'Notorious Motorsports'),
(5, 5, '2023-07-25', 'Battery Replacement', 800.00, 'Cars 101');

INSERT INTO Accidents (accident_id, tricycle_id, date, city, description, damage_cost)
VALUES
(1, 1, '2023-05-12', 'Dasmariñas', 'Hit and run', 2000.00),
(2, 2, '2023-06-18', 'Imus', 'Blind spot accident', 1500.00),
(3, 3, '2023-07-22', 'Cavite City', 'T-bone', 2500.00),
(4, 4, '2023-08-30', 'Bacoor', 'Rollovers', 3000.00),
(5, 5, '2023-09-10', 'Tagaytay', 'Speeding', 1800.00);
