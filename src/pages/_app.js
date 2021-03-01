import '@/css/tailwind.css'
import Head from 'next/head'
import SectionContainer from '@/components/SectionContainer'

export default function App({ Component, pageProps }) {
  return (
    <div className="antialiased">
      <Head>
        <meta name="theme-color" content="#ffffff" />
      </Head>
      <SectionContainer>
        <main>
          <Component {...pageProps} />
        </main>
      </SectionContainer>
    </div>
  )
}
