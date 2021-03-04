import Head from 'next/head'
import Link from 'next/link'
import tinytime from 'tinytime'
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

const postDateTemplate = tinytime('{dddd} {Do} {MMMM}, {YYYY}')

export default function Post({ meta, children }) {
  const router = useRouter()

  return (
    <article>
      <Head>
        <title>{meta.title} – Lee Pownall</title>
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@leepownall" />
        <meta name="twitter:creator" content="@leepownall" />
        <meta name="twitter:title" content={`${meta.title} – Lee Pownall`} />
        <meta name="twitter:description" content={meta.description} />
        <meta property="og:url" content={`https://pownall.dev${router.pathname}`} />
        <meta property="og:type" content="article" />
        <meta property="og:title" content={`${meta.title} – Lee Pownall`} />
        <meta property="og:description" content={meta.description} />
        <meta name="description" content={meta.description}></meta>
      </Head>
      <div className="space-y-4">
        <div className="pt-8 sm:pt-20">
          <Header title={meta.title} />
        </div>
        <div className="flex flex-row justify-between">
          <time className="text-gray-500" dateTime={meta.date}>{postDateTemplate.render(new Date(meta.date))}</time>
          <Link href="/">
            <a className="block leading-5 font-medium text-gray-500 hover:text-black">
              Back
            </a>
          </Link>
        </div>
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
      </div>
    </article>
  )
}
