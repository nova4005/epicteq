import Head from 'next/head'
import Image from 'next/image'
import styled from 'styled-components';
import styles from '../styles/Home.module.css'

const Border = styled.span`
    height: 1rem;
    width: 100%;
    display: block;
    transform: skew(-60deg);
    margin-top: 1rem;
    background: #b92b27;
    background: linear-gradient(270deg, #F72585, #b5179e, #7209b7, #560bad, #480ca8, #3a0ca3, #3f37c9, #4361ee, #4895ef, #4cc9f0);
    background-size: 400% 400%;
    -webkit-animation: bgPulse 15s ease infinite;
    -moz-animation: bgPulse 15s ease infinite;
    animation: bgPulse 15s ease infinite;
  `;

export default function Home() {
  return (
    <div className={styles.container}>
      <Head>
        <title>Epicteq Development</title>
        <meta name="description" content="Building next level apps!" />
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main className={styles.main}>
        <h1 className={styles.title}>
          Welcome to Epicteq!
          <Border />
        </h1>
      </main>

      <footer className={styles.footer}>
        <a
          href="https://garrettseymour.com"
          target="_blank"
          rel="noopener noreferrer"
          style={{ display: "flex", alignItems: "center" }}
        >
          Powered by{" "}
          <span className={styles.logo}>
            <Image
              src="/Epicteq.svg"
              alt="Epicteq Logo"
              width={100}
              height={30}
            />
          </span>
        </a>
      </footer>
    </div>
  );
}
