<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Mama's Herbal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', -apple-system, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0a0a1a;
            overflow: hidden;
            position: relative;
        }

        /* Animated gradient background */
        body::before {
            content: '';
            position: absolute;
            top: -50%; left: -50%;
            width: 200%; height: 200%;
            background: conic-gradient(from 0deg at 50% 50%,
                #0a0a1a 0deg,
                #1a0a2e 60deg,
                #0a1a0a 120deg,
                #0a0a2e 180deg,
                #1a0a1a 240deg,
                #0a1a2e 300deg,
                #0a0a1a 360deg
            );
            animation: rotateBg 20s linear infinite;
            z-index: 0;
        }

        @keyframes rotateBg {
            to { transform: rotate(360deg); }
        }

        /* Floating orbs */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            z-index: 1;
            animation: float 8s ease-in-out infinite;
        }

        .orb--1 {
            width: 300px; height: 300px;
            background: rgba(108, 99, 255, 0.15);
            top: 10%; left: 20%;
        }

        .orb--2 {
            width: 250px; height: 250px;
            background: rgba(0, 214, 143, 0.1);
            bottom: 15%; right: 15%;
            animation-delay: -3s;
        }

        .orb--3 {
            width: 200px; height: 200px;
            background: rgba(255, 169, 77, 0.08);
            top: 60%; left: 5%;
            animation-delay: -5s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-30px) scale(1.05); }
        }

        /* Login Card */
        .login-card {
            position: relative;
            z-index: 10;
            width: 420px;
            max-width: 90vw;
            background: rgba(26, 26, 62, 0.6);
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(40px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            padding: 48px 40px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255,255,255,0.05);
        }

        .login-card__logo {
            text-align: center;
            margin-bottom: 36px;
        }

        .login-card__logo-icon {
            width: 64px; height: 64px;
            background: linear-gradient(135deg, #6c63ff, #00d68f);
            border-radius: 18px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 16px;
            box-shadow: 0 10px 30px rgba(108, 99, 255, 0.3);
        }

        .login-card__logo h1 {
            font-size: 22px;
            font-weight: 700;
            color: #e8e8f0;
            margin-bottom: 4px;
        }

        .login-card__logo p {
            font-size: 13px;
            color: #6868a0;
            font-weight: 400;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: #9090b0;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            padding: 14px 18px;
            background: rgba(37, 37, 80, 0.6);
            border: 1px solid rgba(255,255,255,0.06);
            border-radius: 12px;
            color: #e8e8f0;
            font-size: 15px;
            font-family: inherit;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #6c63ff;
            box-shadow: 0 0 0 4px rgba(108, 99, 255, 0.15);
            background: rgba(37, 37, 80, 0.9);
        }

        .form-input::placeholder {
            color: #5050a0;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #6c63ff, #7c73ff);
            border: none;
            border-radius: 12px;
            color: #fff;
            font-size: 15px;
            font-weight: 700;
            font-family: inherit;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(108, 99, 255, 0.3);
            margin-top: 8px;
            letter-spacing: 0.5px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(108, 99, 255, 0.4);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .error-msg {
            background: rgba(255, 107, 107, 0.1);
            border: 1px solid rgba(255, 107, 107, 0.2);
            color: #ff6b6b;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 13px;
            margin-bottom: 20px;
            text-align: center;
        }

        .login-footer {
            text-align: center;
            margin-top: 28px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.05);
        }

        .login-footer a {
            color: #6c63ff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: color 0.2s;
        }

        .login-footer a:hover {
            color: #9090ff;
        }
    </style>
</head>
<body>
    <div class="orb orb--1"></div>
    <div class="orb orb--2"></div>
    <div class="orb orb--3"></div>

    <div class="login-card">
        <div class="login-card__logo">
            <div class="login-card__logo-icon">🌿</div>
            <h1>Mama's Herbal</h1>
            <p>Admin Panel — Sign in to continue</p>
        </div>

        @if($errors->any())
            <div class="error-msg">
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        @if(session('success'))
            <div style="background:rgba(0,214,143,0.1);border:1px solid rgba(0,214,143,0.2);color:#00d68f;padding:12px 16px;border-radius:10px;font-size:13px;margin-bottom:20px;text-align:center;">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-input"
                       placeholder="admin@mamasherbal.com"
                       value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-input"
                       placeholder="Enter your password" required>
            </div>

            <button type="submit" class="login-btn">
                Sign In →
            </button>
        </form>

        <div class="login-footer">
            <a href="/">← Back to Website</a>
        </div>
    </div>
</body>
</html>
