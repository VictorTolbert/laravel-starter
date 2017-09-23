import axios from 'axios'

export default class Api {
    static getUsers () {
        return axios.get(`https://jsonplaceholder.typicode.com/users`)
    }
}
