<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SLController extends Controller
{
    public function mainProduct() {
        $productArr = [
            ["name" => "Spicy Chicken Sandwich", "id" => "1", "status" => "R", "price" => 35000, "description" => "A deliciously spicy chicken patty served on a soft bun with lettuce, tomato, and mayo. Perfect for a quick lunch on-the-go!"],
            ["name" => "Wireless Earbuds", "id" => "2", "status" => "SSR", "price" => 700000, "description" => "These sleek and stylish wireless earbuds offer crystal-clear sound and a comfortable fit. With up to 8 hours of battery life and a charging case, you can enjoy your favorite tunes all day long."],
            ["name" => "Organic Blueberries", "id" => "3", "status" => "SR", "price" => 50000, "description" => "These juicy, plump blueberries are 100% organic and packed with antioxidants. Add them to your morning smoothie or enjoy them as a healthy snack."],
            ["name" => "Yoga Mat", "id" => "4", "status" => "SR", "price" => 200000, "description" => "This non-slip yoga mat is perfect for all types of yoga and exercise. With a comfortable thickness and durable material, you can practice in comfort and style."],
            ["name" => "Portable Charger", "id" => "5", "status" => "SSR", "price" => 300000, "description" => "Keep your devices charged on-the-go with this powerful portable charger. With multiple ports and fast charging capabilities, you'll never have to worry about a dead battery again."],
            ["name" => "Waterproof Camera", "id" => "6", "status" => "SSR", "price" => 2500000, "description" => "Capture your adventures with this high-quality waterproof camera. With 4K video and 20MP photos, you'll be able to relive your memories in stunning detail."],
            ["name" => "Fitness Tracker", "id" => "7", "status" => "R", "price" => 900000, "description" => "Keep track of your health and fitness goals with this smart fitness tracker. With features like heart rate monitoring, step counting, and sleep tracking, you'll be able to monitor your progress and stay motivated."],
            ["name" => "Portable Bluetooth Speaker", "id" => "8", "status" => "SR", "price" => 500000, "description" => "Take your music with you wherever you go with this portable Bluetooth speaker. With powerful sound and long battery life, you can enjoy your favorite tunes on-the-go."],
            ["name" => "Espresso Machine", "id" => "9", "status" => "SSR", "price" => 5000000, "description" => "Enjoy cafe-quality espresso at home with this high-end espresso machine. With advanced features like a built-in grinder and milk frother, you can make the perfect cup of coffee every time."],
            ["name" => "Electric Toothbrush", "id" => "10", "status" => "R", "price" => 700000, "description" => "Keep your teeth and gums healthy with this powerful electric toothbrush. With multiple brush modes and a long battery life, you'll have everything you need for a perfect smile."]
        ];

        return view('productMain', [
            "product" => $productArr
        ]);
    }

    public function detailProduct($id) {
        $newProduct = [];

        $productArr = [
            ["name" => "Spicy Chicken Sandwich", "id" => "1", "status" => "R", "price" => 35000, "description" => "A deliciously spicy chicken patty served on a soft bun with lettuce, tomato, and mayo. Perfect for a quick lunch on-the-go!"],
            ["name" => "Wireless Earbuds", "id" => "2", "status" => "SSR", "price" => 700000, "description" => "These sleek and stylish wireless earbuds offer crystal-clear sound and a comfortable fit. With up to 8 hours of battery life and a charging case, you can enjoy your favorite tunes all day long."],
            ["name" => "Organic Blueberries", "id" => "3", "status" => "SR", "price" => 50000, "description" => "These juicy, plump blueberries are 100% organic and packed with antioxidants. Add them to your morning smoothie or enjoy them as a healthy snack."],
            ["name" => "Yoga Mat", "id" => "4", "status" => "SR", "price" => 200000, "description" => "This non-slip yoga mat is perfect for all types of yoga and exercise. With a comfortable thickness and durable material, you can practice in comfort and style."],
            ["name" => "Portable Charger", "id" => "5", "status" => "SSR", "price" => 300000, "description" => "Keep your devices charged on-the-go with this powerful portable charger. With multiple ports and fast charging capabilities, you'll never have to worry about a dead battery again."],
            ["name" => "Waterproof Camera", "id" => "6", "status" => "SSR", "price" => 2500000, "description" => "Capture your adventures with this high-quality waterproof camera. With 4K video and 20MP photos, you'll be able to relive your memories in stunning detail."],
            ["name" => "Fitness Tracker", "id" => "7", "status" => "R", "price" => 900000, "description" => "Keep track of your health and fitness goals with this smart fitness tracker. With features like heart rate monitoring, step counting, and sleep tracking, you'll be able to monitor your progress and stay motivated."],
            ["name" => "Portable Bluetooth Speaker", "id" => "8", "status" => "SR", "price" => 500000, "description" => "Take your music with you wherever you go with this portable Bluetooth speaker. With powerful sound and long battery life, you can enjoy your favorite tunes on-the-go."],
            ["name" => "Espresso Machine", "id" => "9", "status" => "SSR", "price" => 5000000, "description" => "Enjoy cafe-quality espresso at home with this high-end espresso machine. With advanced features like a built-in grinder and milk frother, you can make the perfect cup of coffee every time."],
            ["name" => "Electric Toothbrush", "id" => "10", "status" => "R", "price" => 700000, "description" => "Keep your teeth and gums healthy with this powerful electric toothbrush. With multiple brush modes and a long battery life, you'll have everything you need for a perfect smile."]
        ];
    
        foreach($productArr as $p) {
            if($p["id"] === $id) {
                $newProduct = $p;
            }
        }
    
        return view('productDetail', [
            "title" => "Details",
            "product" => $newProduct
        ]);
    }
}


