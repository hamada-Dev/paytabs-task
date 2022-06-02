#PAYTABS Company
## About Project

The application should be composed of the following components.


• Main categories select box

• Unlimited subcategories of parent category (if it is hard to achive the unlimit levels, you can set 3 levels hard-coded)

• Main categories select box

• Unlimited subcategories of parent category (if it is hard to achive the unlimit levels, you can set 3 levels hard-coded)

• Should use Ajax

 

 

Example

Category A
Category B
Sub B1
Sub B2
....
 

Select Category B

 

Will create other select box with

• SUB B1

• SUB B2

 

Selecting Sub B2 will create select box

• SUB SUB B2-1

• SUB SUB B2-2
• Should use Ajax
• Main categories select box

• Unlimited subcategories of parent category (if it is hard to achive the unlimit levels, you can set 3 levels hard-coded)

• Should use Ajax

 

 

Example

Category A
Category B
Sub B1
Sub B2
....
 

Select Category B

 

Will create other select box with

• SUB B1

• SUB B2

 

Selecting Sub B2 will create select box

• SUB SUB B2-1

• SUB SUB B2-2

 

 

Example

Category A
Category B
Sub B1
Sub B2
....
 

Select Category B

 

Will create other select box with

• SUB B1

• SUB B2
• Main categories select box

• Unlimited subcategories of parent category (if it is hard to achive the unlimit levels, you can set 3 levels hard-coded)

• Should use Ajax

 

 

Example

Category A
Category B
Sub B1
Sub B2
....
 

Select Category B

 

Will create other select box with

• SUB B1

• SUB B2

 

Selecting Sub B2 will create select box

• SUB SUB B2-1

• SUB SUB B2-2
• Main categories select box

• Unlimited subcategories of parent category (if it is hard to achive the unlimit levels, you can set 3 levels hard-coded)

• Should use Ajax

 

 

Example

Category A
Category B
Sub B1
Sub B2
....
 

Select Category B

 

Will create other select box with

• SUB B1

• SUB B2

 

Selecting Sub B2 will create select box

• SUB SUB B2-1

• SUB SUB B2-2

 

Selecting Sub B2 will create select box

• SUB SUB B2-1

• SUB SUB B2-2

## install 
- **Install Xampp to you pc and run it**
- **open partion C:\xampp\htdocs\**
- **open cmd**
```
git clone https://github.com/hamada-Dev/paytabs-task.git
```
- **then run**
```
composer update
```
- **then run**
```
npm install
```
- **then run**
```
cp .env.example .env
```
- **open phpMyAdmin and create Database**
- **add username and password in .env file**
```
DB_DATABASE=paytabs
DB_USERNAME=root
DB_PASSWORD=
```
- **run this commend to create DB**
```
php artisan migrate:fresh --seed
```
```
php artisan serve
```
- **open browser**
``` 
http://127.0.0.1:8000/
```
    You don't have to login
```

## the stages

- **understand business requirements**
- **Database Category Table**
- **Application Model**
- **Application Controller**
- **Application View**
- **Application interface Front-end 
(HTML, CSS, Bootstrap, JavaScript, 
jQuery)**


## Application 
```
http://127.0.0.1:8000/dashboard/categories/create
```

## data 
```
category columns [title, code, pranet_id]
```
