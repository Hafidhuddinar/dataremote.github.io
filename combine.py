from pathlib import Path
import xlwings as xw

SOURCE_DIR = 'F:/2023/feb'

excel_files = list(Path(SOURCE_DIR).glob('*.xlsx'))
combined_wb = xw.Book()

for excel_file in excel_files:
    wb = xw.Book(excel_file)
    for sheet in wb.sheets:
        sheet.api.Copy(After=combined_wb.sheets[0].api)
    wb.close()

combined_wb.sheets[0].delete()

sorted_sheet_names = sorted(combined_wb.sheets, key=lambda x: int(x.name.split('(')[-1].replace(')', '')))

for idx, sheet in enumerate(sorted_sheet_names, start=1):
    new_name = f'b2tgl{idx}'
    sheet.name = new_name

combined_wb.save(f'Februari.xlsx')
if len(combined_wb.app.books) == 1:
    combined_wb.app.quit()
else:
    combined_wb.close()
