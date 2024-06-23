# Sistema de Mapeamento de Áreas de Risco

## Descrição do Projeto

O Sistema de Mapeamento de Áreas de Risco é uma aplicação web projetada para identificar, mapear e alertar sobre áreas de risco em uma comunidade. Utilizando tecnologias modernas de mapeamento e notificações em tempo real, o sistema visa a prevenção e a mitigação de desastres naturais, como deslizamentos, enchentes e outros eventos adversos. Além disso, o sistema fornece informações educativas para aumentar a conscientização e a preparação da comunidade.

## Funcionalidades Principais

### 1. Mapeamento de Áreas de Risco
- **Mapas Interativos:** Utilização de mapas interativos para identificar e marcar áreas de risco.
- **Classificação de Riscos:** Classificação dos riscos por tipo (deslizamentos, enchentes, etc.) e nível de gravidade.

### 2. Banco de Dados de Incidentes
- **Histórico de Incidentes:** Manutenção de um histórico detalhado de incidentes de desastres naturais na região.
- **Análise de Padrões:** Permite a visualização de ocorrências passadas para análise de padrões e tendências.

### 3. Sistema de Alertas
- **Notificações em Tempo Real:** Envio de notificações e alertas para os moradores das áreas afetadas via SMS, e-mail ou push notifications.
- **Integração com Sistemas de Monitoramento:** Integração com sistemas de monitoramento meteorológico e geológico para alertas automáticos.

### 4. Informações Educativas
- **Materiais Educativos:** Disponibilização de materiais educativos sobre prevenção e preparação para desastres naturais.
- **Guias de Ação:** Oferecimento de guias sobre como agir durante e após um desastre.

### 5. Interface para Relatos de Usuários
- **Relatos de Moradores:** Permite que moradores reportem situações de risco ou ocorrências de desastres.
- **Atualização em Tempo Real:** Integração dos relatos no mapa para atualização em tempo real.

### 6. Painel de Administração
- **Gestão de Informações:** Fornecimento de uma interface para que autoridades locais e gestores do sistema possam adicionar, editar e remover informações sobre áreas de risco.
- **Gerenciamento de Usuários:** Gestão dos dados dos usuários e configuração dos parâmetros dos alertas.

## Tecnologias Utilizadas

### Back-end
- **Framework:** Laravel (PHP MVC)
- **Banco de Dados:** MySQL ou PostgreSQL

### Front-end
- **Framework:** Vue.js ou React.js
- **Mapeamento:** Leaflet.js ou Google Maps API para mapas interativos

### Serviços de Notificação
- **SMS:** Twilio ou Nexmo
- **E-mail:** SendGrid ou Amazon SES
- **Push Notifications:** Firebase Cloud Messaging

### Monitoramento e Integrações
- **Meteorológico:** APIs de serviços como OpenWeatherMap ou NOAA
- **Geológico:** APIs de serviços como USGS (United States Geological Survey)

## Etapas do Desenvolvimento

### 1. Planejamento
- **Definição de Requisitos:** Definir requisitos detalhados com a comunidade e autoridades locais.
- **Plano de Projeto:** Criar um plano de projeto com cronograma e marcos.

### 2. Design
- **Wireframes e Protótipos:** Desenvolver wireframes e protótipos da interface do usuário.
- **Usabilidade e Acessibilidade:** Garantir a usabilidade e acessibilidade do sistema.

### 3. Desenvolvimento
- **Implementação do Back-end:** Implementar o back-end utilizando Laravel.
- **Desenvolvimento da Interface do Usuário:** Desenvolver a interface do usuário com Vue.js ou React.js.
- **Integração do Sistema:** Integrar o sistema de mapeamento e os serviços de notificação.
- **Criação do Painel de Administração:** Criar o painel de administração e funcionalidades de gerenciamento.

### 4. Testes
- **Testes Unitários e de Integração:** Realizar testes unitários e de integração.
- **Testes com Usuários:** Testar o sistema com usuários da comunidade para garantir que atende às suas necessidades.

### 5. Implementação
- **Lançamento:** Lançar o sistema em um ambiente de produção.
- **Treinamento:** Treinar as autoridades locais e a comunidade para a utilização do sistema.

### 6. Manutenção e Suporte
- **Monitoramento:** Monitorar o sistema para garantir seu funcionamento contínuo.
- **Atualizações:** Realizar atualizações e melhorias conforme necessário.

## Instalação e Configuração

### Pré-requisitos

- PHP >= 7.4
- Composer
- Node.js
- MySQL ou PostgreSQL

### Passos para Instalação

1. **Clonar o Repositório**
   ```bash
   git clone https://github.com/seu-usuario/sistema-mapeamento-areas-risco.git
   cd sistema-mapeamento-areas-risco
   ```

2. **Instalar Dependências do Back-end**
   ```bash
   composer install
   ```

3. **Instalar Dependências do Front-end**
   ```bash
   npm install
   ```

4. **Configurar o Banco de Dados**
   - Copie o arquivo `.env.example` para `.env`
   - Configure as variáveis de ambiente no arquivo `.env`
   - Execute as migrações do banco de dados:
     ```bash
     php artisan migrate
     ```

5. **Iniciar o Servidor**
   ```bash
   php artisan serve
   npm run dev
   ```

## Uso

### Mapeamento de Áreas de Risco

1. **Acesse a Página de Mapas**
   - Utilize a interface para navegar e identificar áreas de risco no mapa.
   - Adicione marcadores e classifique os riscos.

2. **Consulta de Incidentes**
   - Acesse o histórico de incidentes para visualizar ocorrências passadas.
   - Utilize filtros para análise de padrões e tendências.

### Sistema de Alertas

1. **Configuração de Alertas**
   - Configure os parâmetros dos alertas no painel de administração.
   - Integre com sistemas de monitoramento para alertas automáticos.

2. **Envio de Notificações**
   - Envie notificações em tempo real para os moradores via SMS, e-mail ou push notifications.

### Informações Educativas

1. **Acesse Materiais Educativos**
   - Navegue pela seção de materiais educativos para obter informações sobre prevenção e preparação para desastres.

2. **Guias de Ação**
   - Utilize os guias de ação para saber como proceder durante e após um desastre.

## Contribuição

### Como Contribuir

1. **Fork o Repositório**
2. **Crie um Branch**
   ```bash
   git checkout -b feature/nova-funcionalidade
   ```

3. **Faça Commit das Suas Alterações**
   ```bash
   git commit -m 'Adiciona nova funcionalidade'
   ```

4. **Faça Push para o Branch**
   ```bash
   git push origin feature/nova-funcionalidade
   ```

5. **Abra um Pull Request**

### Código de Conduta

- Respeite todos os membros da comunidade.
- Mantenha a comunicação clara e objetiva.
- Siga as melhores práticas de codificação.

## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## Autores

- **lucas Zambam** - *Desenvolvedor Principal* - (https://github.com/lucaszambam)
- **Gabriela da Silva de Liz** - *Contribuições Especiais* - (https://github.com/SilvaGabriela20)
- **Felipe Ern** - *Contribuições Especiais* - (https://github.com/colaborador2)


## Considerações Finais

Este projeto não só utiliza habilidades técnicas avançadas em desenvolvimento web, mas também tem um impacto social significativo ao melhorar a resiliência da comunidade frente a desastres naturais. É uma excelente oportunidade para aplicar conhecimentos de programação em um contexto prático e de grande relevância.

Convidamos todos a contribuir para o desenvolvimento e aprimoramento deste sistema, visando sempre o benefício da comunidade e a promoção da segurança e da educação ambiental.
