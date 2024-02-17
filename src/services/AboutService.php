<?php
// src/services/AboutService.php

class AboutService {
    // Method to get information about EthnoEats
    public function getAboutInfo() {
        // Retrieve information from the database or other sources
        // For example:
        $info = [
            'description' => 'EthnoEats is a digital platform that employs AI and machine learning to provide personalised recommendations for ethnic restaurants by analysing social media trends and user reviews.',
            // Add more information as needed
        ];
        return $info;
    }
}
