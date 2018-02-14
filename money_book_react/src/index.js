import React from 'react'
import ReactDOM from 'react-dom'
import PropTypes from 'prop-types'
import './index.css'

const MoneyBook = () => {
    const books = [
        {date: "1/1", item: "お年玉", amount: 10000},
        {date: "1/3", item: "ケーキ", amount: -500},
        {date: "2/1", item: "小遣い", amount: 3000},
        {date: "2/5", item: "マンガ", amount: -600},
    ]
    return (
        <div>
            <h1>小遣い帳</h1>
            <table className="book">
            <thead>
                <tr><th>日付</th><th>項目</th><th>入金</th><th>出勤</th></tr>
            </thead>
            <tbody>
                {/* <tr><td>1/1</td><td>お年玉</td><td>10000</td><td></td></tr>
                <tr><td>1/3</td><td>ケーキ</td><td></td><td>500</td></tr>
                <tr><td>2/1</td><td>小遣い</td><td>3000</td><td></td></tr>
                <tr><td>2/5</td><td>マンガ</td><td></td><td>600</td></tr> */}
                {books.map((book)=>
                <MoneyBookItem book ={book} key={book.date + book.item} />)}
            </tbody>

            </table>
        </div>

    )
}

const MoneyBookItem = (props) => {
    const{date, item, amount}= props.book
    return(
        <tr>
            <td>{date}</td>
            <td>{item}</td>
            <td>{amount >= 0 ? amount : null}</td>
            <td>{amount < 0 ? -amount : null}</td>
        </tr>
    )
}

MoneyBookItem.propTypes = {
    book: PropTypes.object.isRequired
}

const Title = (props)=>{
    return (<h1>{props.children}</h1>)
}

Title.propTypes = {
    children: PropTypes.string
}



ReactDOM.render(
    <MoneyBook />,
    document.getElementById('root')
);

