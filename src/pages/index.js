import Link from 'next/link'
import Head from 'next/head'
import Header from '@/components/Header'
import getAllPostPreviews from '@/getAllPostPreviews'

const posts = getAllPostPreviews()

export default function Home() {
  return (
    <div>
      <Head>
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@leepownall" />
        <meta name="twitter:creator" content="@leepownall" />
        <meta name="twitter:title" content="Lee Pownall" />
        <meta name="twitter:description" content="Lee Pownall" />
        <meta property="og:url" content="https://pownall.dev" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Lee Pownall" />
        <meta property="og:description" content="Content from Lee Pownall" />
        <title>Lee Pownall</title>
        <meta name="description" content="Lee Pownall" />
      </Head>
      <div className="pt-8 sm:pt-20">
        <Header title="Lee Pownall" />
      </div>
      <div className="space-y-4 pt-6">
        <p>
          Hello, I'm a PHP Developer from the West Midlands. I specialise in Laravel and focus on writing clean, maintainable, and testable code.
        </p>
        <p>
          Get in touch via <a className="underline" href="https://twitter.com/leepownall" target="_blank">Twitter</a> or email <a className="underline" href="mailto:pownall@hey.com">pownall@hey.com</a>.</p>
      </div>
      <ul className="divide-y divide-gray-200">
        {posts.map(({ link, module: { default: Component, meta } }) => {
          return (
            <li key={link} className="py-12">
              <article className="space-y-2 xl:space-y-0 xl:items-baseline">
                <div className="space-y-5 xl:col-span-3">
                  <div className="space-y-6">
                    <h2 className="text-2xl leading-8 font-bold tracking-tight">
                      <Link href={link}>
                        <a className="text-gray-900">{meta.title}</a>
                      </Link>
                    </h2>
                    <div className="prose max-w-none text-gray-500">
                      <Component />
                    </div>
                  </div>
                  <div className="text-base leading-6 font-medium">
                    <Link href={link}>
                      <a
                        className="text-gray-500 hover:text-black"
                        aria-label={`Read "${meta.title}"`}
                      >
                        Read more &rarr;
                      </a>
                    </Link>
                  </div>
                </div>
              </article>
            </li>
          )
        })}
      </ul>
    </div>
  )
}
