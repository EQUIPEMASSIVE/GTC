-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: mysql796.umbler.com
-- Generation Time: 17-Abr-2017 às 09:01
-- Versão do servidor: 5.6.34-log
-- PHP Version: 5.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u263627493_gtc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(125) NOT NULL,
  `imgPerfil` varchar(512) NOT NULL,
  `email` varchar(125) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(256) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id`, `nome`, `imgPerfil`, `email`, `usuario`, `senha`) VALUES
(1, 'Hesron Carvalho', 'Penguins.jpg', 'hesron@hesron.com', 'hesron', 'bd53869ab9f9f179a53f4715f1a77789894bb85571605ce5f48d3a240e765b96a5bc84ee62ba1cb77443b6ffbf4f806e7faeccd9fcdc3cf2b9d2c5f918f452ea'),
(2, 'Victor williames', 'vitor.jpg', 'williamesdj@gmail.com', 'Victor', '7800aca2256be177c289327017033b8fc9962471837e834ab29a86153025adb490b618c7f36713e3698e8fda3d5de74c73478ec7c3fb11089bc56debd25e9e8d'),
(4, 'kezia lacerda', '222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222.jpg', 'kezia@g.com', 'kezia', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f'),
(5, 'Thayssa Mayara', 'default.png', 'tayssa@gmail.com', 'thayssa', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f'),
(6, 'Thalyssa Carolina', 'default.png', 'thalyssa@gmail.com', 'thalyssa', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f'),
(7, 'Alvaro Reis', 'default.png', 'alvaro@gmail.com', 'alvaro', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(5, 'Games'),
(6, 'Tecnologia'),
(7, 'Atualidades'),
(8, 'Diversos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(125) NOT NULL,
  `conteudo` text NOT NULL,
  `datapub` date DEFAULT NULL,
  `autorPub` varchar(50) NOT NULL,
  `id_autor` int(11) DEFAULT NULL,
  `tags` text,
  `categoria` int(11) NOT NULL,
  `imagem` varchar(125) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `conteudo`, `datapub`, `autorPub`, `id_autor`, `tags`, `categoria`, `imagem`, `status`) VALUES
(44, 'Futurama terÃ¡ jogo para smartphones nos moldes de Simpsons: Tapped Out ', '<p><span class="semantica-autolink-topico-tip"><a class="link-do-autolink-semantico" href="http://www.techtudo.com.br/tudo-sobre/futurama-game-drones.html">Futurama: Game of Drones</a></span>, baseado na popular s&eacute;rie de anima&ccedil;&atilde;o dos mesmos criadores de Os Simpsons, ser&aacute; o novo jogo para smartphones e tablets com <span class="semantica-autolink-topico-tip"><a class="link-do-autolink-semantico" href="http://www.techtudo.com.br/tudo-sobre/ios.html">iOS</a></span> e <span class="semantica-autolink-topico-tip"><a class="link-do-autolink-semantico" href="http://www.techtudo.com.br/tudo-sobre/android.html">Android</a></span>. No entanto, h&aacute; poucas informa&ccedil;&otilde;es sobre o t&iacute;tulo e a data de lan&ccedil;amento ainda n&atilde;o foi divulgada.</p>\r\n<p><a href="http://www.techtudo.com.br/noticias/noticia/2014/03/family-guy-ganhara-jogo-nos-mesmos-moldes-de-simpsons-tapped-out.html">Family Guy ganhar&aacute; jogo nos mesmos moldes de The Simpsons: Tapped Out</a></p>\r\n<p>A hist&oacute;ria do jogo Futurama &nbsp;vai focar na batalha entre a firma Planet Express, na qual trabalham os personagens do desenho animado, contra a MomCo, uma empresa vil&atilde;. Os jogadores ter&atilde;o que resolver quebra-cabe&ccedil;as e recolher drones de forma semelhante &agrave;s miss&otilde;es de The Simpsons: Tapped Out e Family Guy: The Quest for Stuff.</p>', '2017-03-25', 'Hesron Carvalho', 1, 'futurama, games,  jogos', 5, 'futurama-smartphone-tablet-ios-android.jpg', 1),
(45, 'Cibercriminosos podem estar certos: iPhones devem ser apagados em breve', '<p>Caso voc&ecirc; n&atilde;o se lembre, um grupo de hackers black hat identificado como Turkish Crime Family est&aacute; tentando <a href="https://www.tecmundo.com.br/ataque-hacker/115169-hackers-ameacam-apple-vamos-apagar-iphones-nao-pagarem.htm?assdagh" target="_blank">extorquir a Apple</a>: eles reivindicam acesso ao cache do iCloud e 300 milh&otilde;es de contas de email Apple e pedem US$ 75 mil em Bitcoins ou Ethereum para n&atilde;o apagar o conte&uacute;do dos servi&ccedil;os. Em um movimento mais dr&aacute;stico, o Turkish Crime Family indicou a possibilidade de apagar conte&uacute;do de iPhones via iCloud.</p>\r\n<ul>\r\n<li><a href="https://www.tecmundo.com.br/apple" target="_blank">A Apple</a> tem at&eacute; o dia 7 de abril para pagar a exig&ecirc;ncia</li>\r\n</ul>\r\n<p class="uk-text-right"><span class="nzn-article-eye">Os cibercriminosos entregaram uma amostra de 54 contas e senhas</span></p>\r\n<p>Alguns dias se passaram e, obviamente, muitos ve&iacute;culos e a pr&oacute;pria Apple foram atr&aacute;s da quest&atilde;o para entender melhor sobre a veracidade da afirma&ccedil;&atilde;o. Muitos pontos foram descobertos e, ao que parece, o grupo hacker black hat realmente tem <a href="https://www.tecmundo.com.br/ataque-hacker" target="_blank">uma posi&ccedil;&atilde;o de vantagem</a>.</p>\r\n<p>O Turkish Crime Family, apesar do nome, se encontra em Londres, na Inglaterra. De acordo com investiga&ccedil;&atilde;o do ZDNet, os cibercriminosos conseguiram senhas que eram utilizadas apenas para o iCloud, sem liga&ccedil;&atilde;o com outros servi&ccedil;os. Ao entrar em contato com o grupo, eles tamb&eacute;m conseguiram uma amostra de 54 credenciais e descobriram o seguinte dado alarmante: todas as contas eram v&aacute;lidas.</p>\r\n<p><a href="http://www.zdnet.com/article/apple-icloud-ransom-what-you-need-to-know/" target="_blank">Segundo o ZDNet</a>, as contas obtidas t&ecirc;m o seguinte dom&iacute;nio: icloud.com, me.com e mac.com. O arquivo recebido pelo ve&iacute;culo tamb&eacute;m &eacute; simples, contendo apenas os emails e as respectivas senhas ao lado.</p>', '2017-03-25', 'Hesron Carvalho', 1, 'hacker', 8, '24142931378002-t1200x480.jpg', 1),
(47, 'Google revela quais sÃ£o os 15 smartphones mais seguros do mercado ', '<p>Al&eacute;m do uso consciente do aparelho, a melhor maneira de se proteger contra malware e invasores &eacute; manter um dispositivo atualizado com todos os patches de seguran&ccedil;a. No caso, a Google disponibiliza patches praticamente todo m&ecirc;s. Ent&atilde;o, para deixar voc&ecirc; ciente, <a href="https://static.googleusercontent.com/media/source.android.com/en//security/reports/Google_Android_Security_2016_Report_Final.pdf" target="_blank">a companhia agora est&aacute; divulgando</a> quais s&atilde;o os smartphones com sistema operacional Android mais seguros no mercado.</p>\r\n<p class="uk-text-right"><span class="nzn-article-eye">Infelizmente, a ado&ccedil;&atilde;o do Nougat ainda &eacute; baixa</span></p>\r\n<p>Vale notar que nem todos os aparelhos da lista possuem o Android 7.0 Nougat, o &uacute;ltimo sistema desenvolvido pela <a href="http://www.tecmundo.com.br/google" target="_blank">Google</a>, o qual&nbsp;tem um foco muito maior em seguran&ccedil;a. Com o Nougat, o usu&aacute;rio consegue realizar a atualiza&ccedil;&atilde;o OTA de maneira mais f&aacute;cil.</p>\r\n<p>Antes de voc&ecirc; descobrir quais s&atilde;o os smartphones mais seguros no mundo Android, saiba que a Google realiza um programa interessante para pesquisadores de seguran&ccedil;a: o Android Security Rewards Program. Se voc&ecirc; encontrar alguma vulnerabilidade no sistema e report&aacute;-la, a Google vai pag&aacute;-lo pela descoberta. At&eacute; agora, j&aacute; foi destinado cerca de US$ 1 milh&atilde;o (R$ 3 milh&otilde;es) a 125 equipes de seguran&ccedil;a.</p>', '2017-03-25', 'Hesron Carvalho', 1, 'tecnogia celular smartphone', 6, '23114647988086-t1200x480.jpg', 1),
(49, 'Energia limpa em casa: Tesla comeÃ§a a vender suas telhas solares em abril  ', '<p><a title="Tesla revela telhado solar ousado e nova vers&atilde;o de sua bateria para casas" href="http://www.tecmundo.com.br/tesla/111148-tesla-revela-telhado-solar-ousado-nova-versao-bateria-casas.htm" target="_blank">Anunciadas no m&ecirc;s de outubro de 2016</a>, as telhas solares da <a title="Tesla" href="http://www.tecmundo.com.br/tesla/" target="_blank">Tesla</a>&nbsp;chamaram aten&ccedil;&atilde;o quando foram reveladas ao mundo, mas sumiram um pouco dos holofotes at&eacute; ent&atilde;o. Felizmente, Elon Musk, o chef&atilde;o da empresa, resolveu mais uma vez ir ao <a title="Twitter" href="http://www.tecmundo.com.br/twitter/" target="_blank">Twitter</a>&nbsp;para bater papo com os seus seguidores e acabou revelando que o produto pode dar as caras no mercado muito em breve.</p>\r\n<p>De acordo com uma conversa na rede social entre o executivo e um internauta, na &uacute;ltima sexta-feira (24), os pain&eacute;is solares texturizados e que podem substituir o telhado convencional das casas deve come&ccedil;ar a ser vendido oficialmente a partir de abril. Infelizmente, a data s&oacute; diz respeito ao per&iacute;odo em que a fabricante vai come&ccedil;ar a aceitar pedidos do item, n&atilde;o quando ele efetivamente deve chegar &agrave;s m&atilde;os dos clientes.</p>\r\n<p>&nbsp;</p>\r\n<p>Outro ponto que ainda &eacute; um mist&eacute;rio &eacute; o pre&ccedil;o desse tipo de novidade tecnol&oacute;gica, j&aacute; que recorrer &agrave; energia verde costuma ser algo relativamente caro quando comparado aos modelos energ&eacute;ticos convencionais. Para alegria de quem espera n&atilde;o gastar muito com a troca, Musk chegou a mencionar em uma reuni&atilde;o com investidores que a expectativa &eacute; que as telhas solares sejam mais baratas que suas contrapartes tradicionais. Ser&aacute; mesmo?</p>', '2017-03-25', 'Hesron Carvalho', 1, 'tecnologia testa energia painel solar', 6, '25111507819235-t1200x480.jpg', 1),
(50, 'Review: processador AMD Ryzen R7 1800X', '<p><span style="font-size: small; font-family: georgia,palatino; color: #333333;">O mercado de processadores &eacute; dominado, essencialmente, por duas fabricantes: Intel e AMD. Nesse cen&aacute;rio, a AMD &eacute; reconhecida por suas m&uacute;ltiplas iniciativas que trouxeram, ao longo dos anos, mais desempenho ao consumidor para in&uacute;meras atividades.</span></p>\r\n<p><span style="font-size: small; font-family: georgia,palatino; color: #333333;">Ao longo dos &uacute;ltimos anos, no entanto, a AMD focou seus esfor&ccedil;os no desenvolvimento de produtos diferenciados, para conquistar uma parcela de usu&aacute;rios que buscavam uma solu&ccedil;&atilde;o completa para recursos multim&iacute;dia e tarefas do dia a dia.</span></p>\r\n<p><span style="font-size: small; font-family: georgia,palatino; color: #333333;">Ocorre que, nesse meio tempo, os processadores de alto desempenho da marca evolu&iacute;ram muito pouco, ao ponto de dar espa&ccedil;o para a Intel liderar com folga e ser a &uacute;nica a dar o suporte total para jogadores e profissionais que necessitavam de componentes robustos.</span></p>\r\n<p><span style="font-size: small; font-family: georgia,palatino; color: #333333;">Aparentemente, tudo est&aacute; para mudar neste ano com as CPUs Ryzen. Com uma arquitetura desenvolvida do zero, a AMD pretende entregar competitividade no segmento de chips de alta performance, bem como visa levar solu&ccedil;&otilde;es poderosas ao consumidor que busca alternativas acess&iacute;veis. Ser&aacute; que este &eacute; o grande momento da companhia?</span></p>\r\n<p><span style="font-size: small; font-family: georgia,palatino; color: #333333;">Bom, n&oacute;s recebemos o processador Ryzen 7 1800X para uma an&aacute;lise completa. Este &eacute; o modelo mais avan&ccedil;ado da marca, sendo um componente que chega para competir com o poderoso Intel Core i7-6900K. Quais segredos a AMD guarda neste componente? Acompanhe nosso review para descobrir a arquitetura Zen em detalhes.</span></p>\r\n<h2><span style="font-size: small; font-family: georgia,palatino; color: #333333;">&nbsp;Especifica&ccedil;&otilde;es</span></h2>\r\n<p><span style="font-size: small; font-family: georgia,palatino; color: #333333;">&nbsp;<img title="amd" src="https://img1.ibxk.com.br/2017/03/24/24193610460197.jpg?w=700" alt="" width="625" height="644" /></span></p>', '2017-03-25', 'Hesron Carvalho', 1, 'amd, processador', 6, 'amd.jpg', 1),
(52, 'MÃ©xico e Brasil sÃ£o os principais alvos de ataques online na AmÃ©rica Latina ', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Superando at&eacute; mesmo a Am&eacute;rica do Norte, a Am&eacute;rica Latina recentemente se firmou como uma das regi&otilde;es de maior crescimento de usu&aacute;rios de internet no mundo. Somente nos &uacute;ltimos anos, por exemplo, os pa&iacute;ses da &aacute;rea experimentaram um aumento consider&aacute;vel no n&uacute;mero de internautas, saltando de 237 milh&otilde;es, em 2015, para nada menos que 260 milh&otilde;es no ano passado. Claro que essa mudan&ccedil;a no cen&aacute;rio acabou atraindo a aten&ccedil;&atilde;o de um outro grupo ligado &agrave;s atividades online: os cibercriminosos.</p>\r\n<p>Para ter uma no&ccedil;&atilde;o da atua&ccedil;&atilde;o desses malfeitores, a Unit 42, centro de pesquisas de amea&ccedil;as da Palo Alto Networks, observou cerca de 530 mil sess&otilde;es &uacute;nicas de um malware desconhecido em toda a regi&atilde;o da Am&eacute;rica Latina &ndash; com &ecirc;nfase no M&eacute;xico, Brasil, Col&ocirc;mbia e Argentina. O resultado? Entre julho e dezembro de 2016, o levantamento mostrou que 89% das &ldquo;entregas&rdquo; do software malicioso foram feitas atrav&eacute;s de emails de phishing, seguidos de casos simples de navega&ccedil;&atilde;o pela web.</p>\r\n<p><span class="img-fc"><img src="https://img1.ibxk.com.br/2017/03/25/25130019431241.png?w=700" alt="" /><span class="desc">O Locky coloca um papel de parede no seu PC para dar detalhes do sequestro de dados</span></span></p>\r\n<p>O destaque no per&iacute;odo ficou com a variante do malware chamada Locky, um tipo de ransomware descoberto em fevereiro de 2016 e que apresenta riscos tanto por utilizar Infraestrutura de Chaves P&uacute;blicas (ICP) para criptografia quanto por evoluir constantemente com o objetivo de driblar os controles de seguran&ccedil;a. Durante a &eacute;poca de festas de final de ano, houve um aumento significativo na quantidade de atividades maliciosas na regi&atilde;o da Am&eacute;rica, seguindo de perto a pr&oacute;pria curva de crescimento das compras online nessas datas.</p>\r\n<h2>Variedade de estrat&eacute;gias</h2>\r\n<p class="uk-text-right"><span class="nzn-article-eye">A estrat&eacute;gia dos cibercriminosos parece visar o sistema de pagamento SWIFT</span></p>\r\n<p>Uma s&eacute;rie de ataques ao sistema financeiro vinculado ao Grupo Lazarus tamb&eacute;m chamou aten&ccedil;&atilde;o do grupo respons&aacute;vel pelo estudo. Nesse caso, a estrat&eacute;gia dos cibercriminosos parece visar o sistema de pagamento SWIFT, mudando sites de institui&ccedil;&otilde;es financeiras para redirecionar as v&iacute;timas a portal customizado para viabilizar o exploit. P&aacute;ginas de bancos no M&eacute;xico e Uruguai, por exemplo, foram identificados como alvos desse tipo de empreitada, com os atacantes se aproveitando de vulnerabilidades no Adobe Flash e no Microsoft Silverlight.</p>\r\n<p>O estudo apontou ainda que o M&eacute;xico foi o pa&iacute;s mais prejudicado da regi&atilde;o no segundo semestre de 2016, concentrando 54% do total de ataques. Em seguida vem o Brasil, atingindo a marca de 31% e se mostrando especialmente vulner&aacute;vel a intera&ccedil;&otilde;es do temido Locky, que gerou mais de 70% de toda atividade maliciosa no territ&oacute;rio. Por aqui, a Unit 42 tamb&eacute;m observou a atividade de uma campanha chamada Distribui&ccedil;&atilde;o CerberSage, que utiliza documentos maliciosos do Office para entregar mais dois tipos de ransomware.</p>\r\n<p><span class="img-fc"><img src="https://img2.ibxk.com.br/2017/03/25/25130254523243.jpg?w=700" alt="" /><span class="desc">Trojans e ransomwares ainda s&atilde;o os malwares mais populares na regi&atilde;o</span></span></p>\r\n<p>Dessa nova dupla, o Cerber ganha destaque por ser atualizado regularmente e ter uma taxa elevada de sucesso ao criptografar hosts, enquanto o Sage &eacute; um ransomware que consegue geolocalizar a v&iacute;tima e adicionar um mecanismo de persist&ecirc;ncia para que a infec&ccedil;&atilde;o recomece toda vez que o usu&aacute;rio logar no Windows. Na Argentina e na Col&ocirc;mbia, o Locky mostrou for&ccedil;a, mas foi ultrapassado em atividades maliciosas pelo Bayrob Trojan, descoberto em 2007 e especializado no roubo de informa&ccedil;&otilde;es pessoais, como n&uacute;mero do cart&atilde;o de cr&eacute;dito.</p>\r\n<p>Com esse cen&aacute;rio, a Palo Alto Networks diz que &eacute; fundamental que sejam implantadas estrat&eacute;gias fortes de ciberseguran&ccedil;a na regi&atilde;o. O aproveitamento de pol&iacute;ticas b&aacute;sicas como privil&eacute;gios de usu&aacute;rio, bloqueio de anexos execut&aacute;veis em emails e atualiza&ccedil;&atilde;o de aplica&ccedil;&otilde;es, por exemplo podem impedir os agentes maliciosos de conclu&iacute;rem o ataque. Afinal, estamos falando de locais que passam a ser tratados como &ldquo;regi&atilde;o emergente&rdquo; pelos cibercriminosos e v&atilde;o ser cada vez mais visados para ataques com efeitos financeiros devastadores.</p>\r\n<div class="references"><span class="references-title">Fonte(s)</span>\r\n<ul class="references-list">\r\n<li class="references-item"><a title="Palo Alto Networks/Assessoria" href="https://www.paloaltonetworks.com/" target="_blank">Palo Alto Networks/Assessoria</a></li>\r\n</ul>\r\n</div>\r\n<div class="references"><span class="references-title">Imagen(s)</span>\r\n<ul class="references-list">\r\n<li class="references-item"><a title="Security Intelligence" href="https://securityintelligence.com/multistage-exploit-kits-boost-effective-malware-delivery/" target="_blank">Security Intelligence</a></li>\r\n</ul>\r\n</div>\r\n<p>&nbsp;</p>', '2017-03-26', 'Victor williames', 2, 'hacker, tecnologia, pc, mexico, brasil, america latina', 7, '25130607397244-t1200x480.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`,`nome_categoria`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
