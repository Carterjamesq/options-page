<?php

// Render the content of the options page
function my_theme_options_content() {
    ?>
    <div class="wrap">
        <h1>Theme Options</h1>
        
        <!-- Add tabs navigation -->
        <h2 class="nav-tab-wrapper">
            <a href="#header" class="nav-tab">Header</a>
            <a href="#footer" class="nav-tab">Footer</a>
            <a href="#contacts" class="nav-tab">Contacts</a>
        </h2>
        
        <!-- Add tab content -->
        <div id="header" class="tab-content">
				Header Settings Here
        </div>
        
        <div id="footer" class="tab-content">
            Footer Settings Here
        </div>
        <div id="contacts" class="tab-content">
            Contacts Settings Here
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hide all tab contents except the first one
            var tabs = document.querySelectorAll('.nav-tab');
            var tabContents = document.querySelectorAll('.tab-content');
            
            tabContents.forEach(function(content) {
                content.style.display = 'none';
            });
            
            tabContents[0].style.display = 'block';
            
            // Add click event listeners to the tabs
            tabs.forEach(function(tab) {
                tab.addEventListener('click', function(event) {
                    event.preventDefault();
                    
                    var targetId = this.getAttribute('href').substring(1);
                    var targetContent = document.getElementById(targetId);
                    
                    // Hide all tab contents
                    tabContents.forEach(function(content) {
                        content.style.display = 'none';
                    });
                    
                    // Show the selected tab content
                    targetContent.style.display = 'block';
                });
            });
        });
    </script>
    <?php
}