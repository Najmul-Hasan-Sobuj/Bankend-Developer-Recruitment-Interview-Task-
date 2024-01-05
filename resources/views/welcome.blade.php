<x-admin.app>
    <div class="container mt-5">
        <div class="doc-item">
            <div class="doc-content-wrapper">
                <div class="doc-content">
                    <h2><b>To run a Laravel project with the provided specifications, follow these steps:</b></h2>
                    <ol>
                        <li>
                            <p><strong>Ensure System Requirements:</strong></p>
                            <ul>
                                <li>Make sure your system has PHP 8.1 installed.</li>
                                <li>Ensure Laravel 10 is installed. Laravel 10 is the latest version as per
                                    requirements.</li>
                            </ul>
                        </li>
                        <li>
                            <p><strong>Download the Project:</strong></p>
                            <ul>
                                <li>Download the Laravel project files to your local system.</li>
                            </ul>
                        </li>
                        <li>
                            <p><strong>Configure Environment Settings:</strong></p>
                            <ul>
                                <li>Navigate to the root directory of your downloaded project.</li>
                                <li>Find the <code>.env</code> file. This file contains environment-specific variables.
                                </li>
                                <li>Edit the <code>.env</code> file to match your database configuration. Based on the
                                    information i provided, it should look like this:
                                    <pre>
                                        <code>
                                        DB_CONNECTION=mysql
                                        DB_HOST=127.0.0.1
                                        DB_PORT=3306
                                        DB_DATABASE=db_test
                                        DB_USERNAME=root
                                        DB_PASSWORD=root
                                </code>
                            </pre>
                                </li>
                                <li>Modify these values according to your MySQL database configuration.</li>
                            </ul>
                        </li>
                        <li>
                            <p><strong>Database Setup:</strong></p>
                            <ul>
                                <li>Go to the <code>Others</code> folder located in your project directory.</li>
                                <li>Inside this folder, you will find a database export file from phpMyAdmin.</li>
                                <li>Import this file into your MySQL database. This step sets up your database with the
                                    required tables and data.</li>
                            </ul>
                        </li>
                        <li>
                            <p><strong>Project Dependencies:</strong></p>
                            <ul>
                                <li>Open a terminal or command prompt.</li>
                                <li>Navigate to your project's root directory.</li>
                                <li>Run <code>php artisan migrate --seed</code> to install all the dummy data. If You
                                    are import the database file then no need to run the `cmd`</li>
                                <li>Run <code>php artisan storage:link</code> to link the storage folder.</li>
                            </ul>
                        </li>
                        <li>
                            <p><strong>Start the Project:</strong></p>
                            <ul>
                                <li>Once all the above steps are complete, you can start your Laravel project.</li>
                                <li>Run <code>php artisan serve</code> in your terminal. This will start the Laravel
                                    development server.</li>
                                <li>Access your project at <code>http://localhost:8000</code> or the URL provided in the
                                    terminal.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>Remember to follow these steps carefully to set up and run your Laravel project successfully.</p>
                </div>
            </div>
        </div>
    </div>
</x-admin.app>
