const mysql = require('promise-mysql')
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'upbprojects'
})

function getConnection(){
    return connection;
}

module.exports = {getConnection}