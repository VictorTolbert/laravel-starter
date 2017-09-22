# Tips

<!-- https://blog.pragmatists.com/top-10-es6-features-by-example-80ac878794bb -->

- every
- filter
- find
- forEach
- join
- length
- map
- pop
- push
- reduce
- reverse
- shift
- slice
- some
- sort
- all
- first
- splice
- split
- sum


```js
var colors = ['red', 'green', 'blue']

function print(val) {
  console.log(val)
}

colors.forEach(print)
```

```js
var colors = ['red', 'green', 'blue']

function capitalize(val) {
    return val.toUpperCase()
}

var capitalizedColors = colors.map(capitalize)

console.log(capitalizedColors)
```

```js
var values = [1, 60, 34, 30, 20, 5]

function lessThan20(val) {
    return val < 20
}

var valuesLessThan20 = values.filter(lessThan20)

console.log(valuesLessThan20)
```

```js
var people = [
  {name: 'Jack', age: 50},
  {name: 'Michael', age: 9},
  {name: 'John', age: 40},
  {name: 'Ann', age: 19},
  {name: 'Elisabeth', age: 16}
]

function teenager(person) {
    return person.age > 10 && person.age < 20
}

var firstTeenager = people.find(teenager)

console.log('First found teenager:', firstTeenager.name)
```

```js
var people = [
  {name: 'Jack', age: 50},
  {name: 'Michael', age: 9},
  {name: 'John', age: 40},
  {name: 'Ann', age: 19},
  {name: 'Elisabeth', age: 16}
]

function teenager(person) {
    return person.age > 10 && person.age < 20
}

var everyoneIsTeenager = people.every(teenager)

console.log('Everyone is teenager: ', everyoneIsTeenager)
```

```js
var people = [
  {name: 'Jack', age: 50},
  {name: 'Michael', age: 9},
  {name: 'John', age: 40},
  {name: 'Ann', age: 19},
  {name: 'Elisabeth', age: 16}
]

function teenager(person) {
    return person.age > 10 && person.age < 20
}

var thereAreTeenagers = people.some(teenager)

console.log('There are teenagers:', thereAreTeenagers)
```

```js
var array = [1, 2, 3, 4]

function sum(acc, value) {
  return acc + value
}

function product(acc, value) {
  return acc * value
}

var sumOfArrayElements = array.reduce(sum, 0)
var productOfArrayElements = array.reduce(product, 1)

console.log('Sum of', array, 'is', sumOfArrayElements)
console.log('Product of', array, 'is', productOfArrayElements)
```

```js

var array = [1, 2, 3, 4]

const sum = (acc, value) => acc + value
const product = (acc, value) => acc * value

var sumOfArrayElements = array.reduce(sum, 0)
var productOfArrayElements = array.reduce(product, 1)
```

```js
var array = [1, 2, 3, 4]

var sumOfArrayElements = array.reduce((acc, value) => acc + value, 0)
var productOfArrayElements = array.reduce((acc, value) => acc * value, 1)
```


```js
var array = [1, 2, 3, 4]

const sum = (acc, value) => {
  const result = acc + value
  console.log(acc, ' plus ', value, ' is ', result)
  return result
}

var sumOfArrayElements = array.reduce(sum, 0)
```

```js
class Point {
    constructor(x, y) {
        this.x = x
        this.y = y
    }

    toString() {
        return '[X=' + this.x + ', Y=' + this.y + ']'
    }
}

class ColorPoint extends Point {
    static default() {
        return new ColorPoint(0, 0, 'black')
    }

    constructor(x, y, color) {
        super(x, y)
        this.color = color
    }

    toString() {
        return '[X=' + this.x + ', Y=' + this.y + ', color=' + this.color + ']'
    }
}

console.log('The first point is ' + new Point(2, 10))
console.log('The second point is ' + new ColorPoint(2, 10, 'green'))
console.log('The default color point is ' + ColorPoint.default())
```
```javascript
const schools = {
    "Yourtown" : 10,
    "Washington & Lee" : 2,
    "Wakefiled" : 5,
}

const schoolArray = Object.keys(schools).map(key => ({
    name: key,
    wins: schools[key]
}))

console.log(schoolArray)
```
