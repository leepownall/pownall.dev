import Link from 'next/link'

export default function Header({ title }) {
  return (
    <header className="items-center">
      <Link href="/">
        <a aria-label={title} className="text-3xl font-bold tracking-tighter">
          {title}
        </a>
      </Link>
    </header>
  )
}
