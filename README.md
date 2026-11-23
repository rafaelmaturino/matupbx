# MatuPBX

**MatuPBX** é um sistema PBX (telefonia IP) baseado em software, fork livre do
[SNEP 3](https://github.com/xRWill/snep-3), que reúne todas as funcionalidades
do SNEP 3.06.2 em uma distribuição própria baseada no **BigLinux**, com
**Asterisk 20 LTS** e interface web modernizada para **PHP 8**.

> Este projeto é um fork do SNEP (GPL-2.0), originalmente desenvolvido pelo
> projeto SNEP / Opens Tecnologia. Todos os créditos e a licença original do
> SNEP são preservados — veja [LICENSE.md](LICENSE.md) e [LICENCA_BR.txt](LICENCA_BR.txt).

## Funcionalidades

Todas as funcionalidades do SNEP 3.06.2, incluindo:

- **Ramais e troncos** SIP/IAX2 (gerenciamento pela web, gravação de config no Asterisk)
- **IVR** (menus de voz interativos)
- **Filas de atendimento (queues)** e painel de agentes
- **Billing** (controle de custos por tronco/rota, minutagem)
- **Callback** (retorno de chamada)
- **Relatórios** de chamadas, ranking, sintético, analítico e por serviços
- **Gravações de chamadas** (wav/mp3) com download pela interface
- **Contatos, grupos de contatos e agenda**
- **Portabilidade numérica**
- **Conferências, music-on-hold, voicemail (ODBC)**
- **Multi-idioma**: português, inglês e espanhol
- **Auditoria de usuários** (log de atividades na interface)

## Stack

| Componente | Versão |
|---|---|
| Distribuição base | BigLinux (perfil oficial `iso-profiles`) |
| Asterisk | **20.22.0 LTS** (chan_sip — exigido pelo SNEP; removido desde o Asterisk 21) |
| PHP | 8.x + [zf1-future](https://github.com/Shardj/zf1-future) (Zend Framework 1 compatível com PHP 8) |
| Banco | MariaDB / MySQL (via ODBC para voicemail) |
| Web | Apache httpd + mod_php |

## Instalação

A forma recomendada é a **ISO do MatuPBX** (BigLinux + Asterisk + MatuPBX
pré-configurado). Acesse o site do projeto para download.

Após instalar, acesse `http://ip-do-servidor/matupbx`:

- **Usuário:** `admin`
- **Senha:** `admin123`

## Estrutura do repositório

- `agi/` — scripts AGI (integração com o Asterisk)
- `modules/` — módulos da aplicação (default, billing, callback, ivr, loguser, portability)
- `lib/` — bibliotecas (MatuPBX/Snep, PBX, Asterisk, Zend Framework via zf1-future)
- `install/` — SQL do banco, configs padrão do Asterisk, sons e conf do Apache
- `css/`, `images/`, `lang/` — identidade visual e traduções
- `docs/` — documentação original do SNEP (referência)

## Desenvolvimento

- As traduções ficam em `bin/*.po`; compile com
  `msgfmt -o lang/<idioma>.mo bin/<idioma>.po`.
- A versão do código está em `configs/snep_version`.
- Configurações da aplicação: `includes/setup.conf`.

## Licença

GPL-2.0 (licença original do SNEP — veja [LICENSE.md](LICENSE.md)).
