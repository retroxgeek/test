<!DOCTYPE html>
<html>
<head>
  <style>
    .custom-button {
      position: relative;
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .custom-button::before {
      content: "";
      display: block;
      margin-bottom: 5px;
    }

    .custom-button::after {
      content: "";
      display: block;
      margin-top: 5px;
    }

    .custom-button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <button class="custom-button"></button>
</body>
</html>
