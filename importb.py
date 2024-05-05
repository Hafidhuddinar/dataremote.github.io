import pandas as pd
from sqlalchemy import create_engine

# Mengatur koneksi ke database PHPMyAdmin
db_user = 'root'  # Ganti dengan username database Anda
db_password = ''  # Ganti dengan password database Anda
db_host = 'localhost'  # Ganti dengan host database Anda
db_name = 'bulan1'  # Ganti dengan nama database Anda
db_port = '3306'  # Port default MySQL

# Membuat URL koneksi database
db_url = f"mysql://{db_user}:{db_password}@{db_host}:{db_port}/{db_name}"

# Membuat objek koneksi database
engine = create_engine(db_url)

# Mengambil nama-nama sheet dari file Excel
file_path = 'F:/database/maret.xlsx'  # Ganti dengan path file Excel Anda
excel_data = pd.ExcelFile(file_path)
sheet_names = excel_data.sheet_names

# Membuat tabel-tabel di database berdasarkan sheet
for sheet_name in sheet_names:
    # Membaca data dari sheet Excel ke dalam DataFrame Pandas
    df = pd.read_excel(file_path, sheet_name=sheet_name)
    
    # Mengganti nama kolom sesuai urutan yang diinginkan
    df.columns = ['Category', 'Type', 'Check1', 'Check2', 'Date', '00:00', '00:30','01:00','01:30','02:00','02:30','03:00','03:30',
                  '04:00','04:30','05:00','05:30','06:00','06:30','07:00','07:30','08:00','08:30','09:00','09:30','10:00','10:30','11:00',
                  '11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30',
                  '19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30','Status']
    
    # Menyimpan DataFrame ke dalam database
    df.to_sql(name=sheet_name.lower(), con=engine, if_exists='replace', index=False)

print("Proses konversi selesai.")
