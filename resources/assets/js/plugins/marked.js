import marked, { Renderer } from 'marked'
import highlightjs from 'highlightjs'

const renderer = new Renderer();
renderer.code = (code, language) => {
  const validLang = !!(language && highlightjs.getLanguage(language));
  const highlighted = validLang ? highlightjs.highlight(language, code).value : code;
  return `<pre><code class="hljs ${language}">${highlighted}</code></pre>`;
};
marked.setOptions({ renderer });
