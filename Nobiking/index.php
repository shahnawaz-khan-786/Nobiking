{
  "version": 2,
  "builds": [
    {
      "src": "api/*.php",
      "use": "@vercel/php"
    }
  ],
  "routes": [
    {
      "src": "/(.*)",
      "dest": "/api/$1"
    }
  ]
}
