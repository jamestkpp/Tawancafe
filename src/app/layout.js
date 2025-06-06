import './globals.css';
import Link from 'next/link';

export const metadata = {
  title: 'Tawan Cafe',
  description: 'Bubble tea brand',
};

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <body className="font-body">
        <header className="p-4 shadow-md bg-primary-500 text-white flex gap-4">
          <Link href="/">Home</Link>
          <Link href="/menu">Menu</Link>
          <Link href="/branches">Branches</Link>
          <Link href="/about">About</Link>
          <Link href="/contact">Contact</Link>
        </header>
        <main className="p-4">{children}</main>
      </body>
    </html>
  );
}
