# Padrões de Design Comportamental
Padrões de design comportamental estão relacionados a algoritmos e à atribuição de responsabilidades entre objetos.

## Cadeia de Responsabilidade | *Chain of Resposability*
![](https://refactoring.guru/images/patterns/cards/chain-of-responsibility-mini.png?id=36d85eba8d14986f053123de17aac7a7)

Permite que você passe solicitações ao longo de uma cadeia de manipuladores. Ao receber uma solicitação, cada manipulador decide se processa a solicitação ou se a passa para o próximo manipulador na cadeia.


## Comando | *Command*
![](https://refactoring.guru/images/patterns/cards/command-mini.png?id=b149eda017c0583c1e92343b83cfb1eb)

Transforma uma solicitação em um objeto independente que contém todas as informações sobre a solicitação. Essa transformação permite que você passe solicitações como argumentos de método, adie ou enfileire a execução de uma solicitação e suporte operações que podem ser desfeitas.


## Iterador | *Iterator*
![](https://refactoring.guru/images/patterns/cards/iterator-mini.png?id=76c28bb48f997b36965983dd2b41f02e)

Permite percorrer elementos de uma coleção sem expor sua representação subjacente (lista, pilha, árvore, etc.).


## Mediador | *Mediator*
![](https://refactoring.guru/images/patterns/cards/mediator-mini.png?id=a7e43ee8e17e4474737b1fcb3201d7ba)

Permite reduzir dependências caóticas entre objetos. O padrão restringe comunicações diretas entre os objetos e os força a colaborar somente por meio de um objeto mediador.


## Lembrança | *Memento*
![](https://refactoring.guru/images/patterns/cards/memento-mini.png?id=8b2ea4dc2c5d15775a654808cc9de099)

Permite salvar e restaurar o estado anterior de um objeto sem revelar os detalhes de sua implementação.


## Observador | *Observer*
![](https://refactoring.guru/images/patterns/cards/observer-mini.png?id=fd2081ab1cff29c60b499bcf6a62786a)

Permite definir um mecanismo de assinatura para notificar vários objetos sobre quaisquer eventos que aconteçam com o objeto que eles estão observando.


## Estado | *State*
![](https://refactoring.guru/images/patterns/cards/state-mini.png?id=f4018837e0641d1dade756b6678fd4ee)

Permite que um objeto altere seu comportamento quando seu estado interno muda. Parece que o objeto mudou sua classe.


## Estratégia | *Stratagy*
![](https://refactoring.guru/images/patterns/cards/strategy-mini.png?id=d38abee4fb6f2aed909d262bdadca936)

Permite definir uma família de algoritmos, colocar cada um deles em uma classe separada e tornar seus objetos intercambiáveis.


## Método de modelo | *Template Method*
![](https://refactoring.guru/images/patterns/cards/template-method-mini.png?id=9f200248d88026d8e79d0f3dae411ab4)

Define o esqueleto de um algoritmo na superclasse, mas permite que subclasses substituam etapas específicas do algoritmo sem alterar sua estrutura.


## Visitante | *Visitor*
![](https://refactoring.guru/images/patterns/cards/visitor-mini.png?id=854a35a62963bec1d75eab996918989b)

Permite separar algoritmos dos objetos nos quais eles operam.


Fonte:[REFACTORING-GURU](https://refactoring-guru.translate.goog/design-patterns/behavioral-patterns?_x_tr_sl=en&_x_tr_tl=pt&_x_tr_hl=pt&_x_tr_pto=tc)