<!DOCTYPE html>
<html>
<head>
    <title>Login - Buku Tamu SMK TI Airlangga</title>
    <style>
        body { 
            font-family: Arial; 
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .btn {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background: #0056b3;
        }
        .error {
            background: #ffcccc;
            color: #d8000c;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .school-name {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="school-name">
            <h2>SMK TI AIRLANGGA</h2>
            <p>Buku Tamu Digital</p>
        </div>
        
        <?php if(isset($_SESSION['error'])): ?>
            <div class="error">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="index.php?action=proses_login">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            
            <button type="submit" class="btn">Login</button>
        </form>
        
        <div style="margin-top: 20px; text-align: center; font-size: 12px; color: #666;">
            <strong>Demo Account:</strong><br>
            Admin: admin / admin123<br>
            Staff: staff / staff123
        </div>
    </div>
</body>
</html>
