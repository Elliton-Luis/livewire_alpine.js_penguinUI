# 👌 Livewire with PenguinUI (Tailwind & AlpineJs)

This repository provides a ready-to-use setup for **Livewire**, **AlpineJs**, and **TailwindCSS** with **PenguinUI**, so you don’t waste time configuring the environment.

---

## ⚙️ Installation

1. **Clone the repository**

```bash
git clone https://github.com/Elliton-Luis/livewire_alpine.js_penguinUI project
cd project
```

2. **Install dependencies**

```bash
composer install
npm install
```

3. **Set up the environment**

```bash
cp .env.example .env
php artisan key:generate
```

> **Note:** Configure your database variables in the `.env` file before running migrations:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

4. **Run migrations**

```bash
php artisan migrate
```

5. **Compile Tailwind and AlpineJs for development**

```bash
npm run dev
```

6. **Start the Laravel server**

```bash
php artisan serve
```

The server will be available at `http://localhost:8000`.

---

## 💻 Development

- For real-time frontend updates (Tailwind + AlpineJs), use:

```bash
npm run dev
```

- For production build:

```bash
npm run build
```

---

## 🤝 Contribution

Feel free to open issues or pull requests. All contributions are welcome!

---

## 📌 Notes

- PenguinUI is already prepared for **dark mode**, and you can customize colors directly in the components.  
- The project includes **Livewire** and **AlpineJs** integrated, so you can quickly create interactive components.
