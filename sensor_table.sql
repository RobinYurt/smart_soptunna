CREATE TABLE IF NOT EXISTS sensor_data (
	Mätning int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Procentsats int(3) UNSIGNED,
	Tidpunkt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)