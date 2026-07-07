import type { Metadata } from "next";
import { Geist, Geist_Mono } from "next/font/google";
import "./globals.css";

const geistSans = Geist({
  variable: "--font-geist-sans",
  subsets: ["latin"],
});

const geistMono = Geist_Mono({
  variable: "--font-geist-mono",
  subsets: ["latin"],
});

export const metadata: Metadata = {
  title: "24HCV - Công Nghệ Tương Lai | Modern Tech Innovation",
  description: "Khám phá giải pháp công nghệ tiên tiến với các animation hiện đại nhất 2024. Website showcase về innovation, AI, Cloud Computing, và Digital Transformation.",
  keywords: "công nghệ, innovation, AI, cloud computing, digital transformation, 24HCV",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html
      lang="vi"
      className={`${geistSans.variable} ${geistMono.variable} h-full antialiased bg-background`}
    >
      <head>
        <meta name="theme-color" content="#00d4ff" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
      </head>
      <body className="min-h-full flex flex-col bg-background text-foreground">{children}</body>
    </html>
  );
}
