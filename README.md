# Kien truc he thong Website

## 1. Thong tin template

Responsive web template

## 2. Kien truc he thong
- Website duoc chia thanh nhieu module va duoc gan vao trong mot trang _index.php_ (mo moi phan he se co mot trong _index.php)_.
- Noi dung (content) cua cac trang con se duoc load vao vung Content cua index.php dua vao tham so (_parameter_) _controller (c)_ hoac _action (a)_ trong url.
- __Vi du:__ 
    - __url__: index.php?__c__=_1_&__a__=_2_
    - Thuc hien load: Conten la pIndex.php (trang chu)
- Cau truc Website:
    - __css__ - chua cac file CSS cua Template website
    - __images__ - chua hinh anh cua website
    - __js__ - chua cac file script (javascript)
    - __libs__ - chua cac thuc vien PHP
    - __models__ - chua cac Class Model (DTO) cua project
    - __modules__ - chua cac module cua website
    - __pages__ - chua cac trang (content) cua website

## 3. Cac buoc thuc hien
1. Tach Module dua vao template
    1. __mHeader.php__
    2. __mFooter.php__
    3. __mMenuHang.php__
2. Quy dinh URL
    1. c = 1 - pHome.php
    2. c = 2 - pTypeProducts.php
    3. c = 3 - pProductFullDetail.php