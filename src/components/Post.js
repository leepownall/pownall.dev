import Head from 'next/head'
import Link from 'next/link'
import { useRouter } from 'next/router'
import { MDXProvider } from '@mdx-js/react'
import Header from '@/components/Header'

export const mdxComponents = {
  pre: ({ className, ...props }) => (
    <pre className={`${className} rounded-md bg-gray-800 py-3 px-4 overflow-x-auto`} {...props} />
  ),
  'pre.code': ({ className, ...props }) => (
    <code className={`${className} text-gray-200`} {...props} />
  ),
}

export default function Post({ meta, children }) {
  const router = useRouter()

  return (
    <article>
      <Head>
        <title>{meta.title} – Lee Pownall</title>
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@leepownall" />
        <meta name="twitter:creator" content="@leepownall" />
        <meta name="twitter:title" content={`${meta.title} – Lee Pownall`} />
        <meta name="twitter:description" content={meta.description} />
        <meta name="twitter:image" content={`https://pownall.dev${meta.image}`} />
        <meta property="og:url" content={`https://pownall.dev${router.pathname}`} />
        <meta property="og:type" content="article" />
        <meta property="og:title" content={`${meta.title} – Lee Pownall`} />
        <meta property="og:description" content={meta.description} />
        <meta property="og:image" content={`https://pownall.dev${meta.image}`} />
        <meta name="description" content={meta.description}></meta>
      </Head>
      <Link href="/">
        <a className="block font-medium leading-5 text-gray-500 hover:text-black pt-6">&larr; Back</a>
      </Link>
      <div className="pt-4 sm:pt-10">
        <Header title={meta.title} />
      </div>
      <div className="pb-16 xl:pb-20 pt-6">
        <div className="xl:pb-0 xl:col-span-3 xl:row-span-2">
          <div className="prose max-w-none pb-8">
            <MDXProvider components={mdxComponents}>{children}</MDXProvider>
          </div>
          {meta.footer && (
            <div className="pt-6 pb-16" dangerouslySetInnerHTML={{ __html: meta.footer }} />
          )}
        </div>
        <footer className="pt-8">
          <Link href="/">
            <a className="font-medium leading-5 text-gray-500 hover:text-black">&larr; Back</a>
          </Link>
        </footer>
      </div>
    </article>
  )
}
