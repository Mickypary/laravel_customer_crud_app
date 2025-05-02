<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->string('product_name');
            $table->double('total_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};


// CREATE TABLE categories(
//     cat_id int not null auto_increment primary key,
//     cat_name varchar(255) not null,
//     cat_description text
// ) ENGINE=InnoDB;

// CREATE TABLE products(
//     prd_id int not null auto_increment primary key,
//     prd_name varchar(355) not null,
//     prd_price decimal,
//     cat_id int not null,
//     FOREIGN KEY fk_cat(cat_id)
//     REFERENCES categories(cat_id)
//     ON UPDATE CASCADE
//     ON DELETE RESTRICT
//  )ENGINE=InnoDB;
