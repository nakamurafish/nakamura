import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import PropTypes from 'prop-types'
import MuiThemeProvider from 'material-ui/styles/MuiThemeProvider'
import RaisedButton from 'material-ui/RaisedButton'
import Paper from 'material-ui/Paper';
import {Tabs,Tab}from 'material-ui/Tabs'
import {Table,TableBody,TableHeader,TableHeaderColumn,TableRow,TableRowColumn} from 'material-ui/Table';
import Jyanken from './Jyanken'
// import './index.css'

class JyankenGamePage extends Component{
    constructor(props){
        super(props)
        // this.state = {human: null, computer: null}
        this.jyanken = new Jyanken()
        this.state = {scores: [], status: {}, tabIndex: 0}
    }
    // pon(human_hand){
    //     const computer_hand = Math.floor(Math.random()*3)
    //     this.setState({human: human_hand,computer: computer_hand})
    // }
    // judge(){
    //     if(this.state.human==null){
    //         return null
    //     }else{
    //         return (this.state.computer - this.state.human + 3) % 3
    //     }
    // }

    // render(){
    //     return(
    //         <div>
    //             <h1>じゃんけん　ポン！</h1>
    //             <JyankenBox actionPon = {(te) => this.pon(te) } />
    //             <ScoreBox human = {this.state.human} computer={this.state.computer} judgment={this.judge()} />                
    //         </div>
    //     )
    // }
    componentDidMount(){
        // setTimeout(() => {this.pon(1)},1000 )

        this.getResult()
    }

//     shouldComponentUpdate(nextProps, nextState){
//         const identical = nextState.human == this.state.human &&
//         nextState.computer == this.state.computer
//         if(identical){console.log("*Identical*")}
//         return !identical
//     }

    tabChange(ix){
        this.setState({scores: this.jyanken.getScores()})
        this.getResult()
    }
    render(){
        return (
            <MuiThemeProvider>
                <div style={{marginLeft: 30}}>
                <header>じゃんけん　ポン！</header>
                <JyankenBox　actionPon={(te) => this.pon(te)} />
                    <Paper style={{width: 400}} zDepth={2}>
                        <Tabs value={this.state.tabIndex} onChange={(ix) => this.tabChange(ix)} >
                            <Tab label="" value={0}>
                                <ScoreList scores={this.state.scores} />
                            </Tab>
                        </Tabs>
                    </Paper>
                </div>
            </MuiThemeProvider>
        )
    }
}

const StatusBox = (props) => (
    <Table>
        <TableBody displayRowCheckbox={false}>
            <TableRow displayBorder={false}>
                <TableHeaderColumn>勝ち</TableHeaderColumn><TableRowColumn style={judgmentStyle(1)} > {props.status.win}</TableRowColumn>
            </TableRow>
            <TableRow displayBorder={false}>
                <TableHeaderColumn>負け</TableHeaderColumn><TableRowColumn style={judgmentStyle(2)} > {props.status.lose}</TableRowColumn>
            </TableRow>
            <TableRow displayBorder={false}>
                <TableHeaderColumn>引き分け</TableHeaderColumn><TableRowColumn style={judgmentStyle(0)} > {props.status.draw}</TableRowColumn>
            </TableRow>
        </TableBody>
    </Table>
)



const JyankenBox = (props) => {
    const style = {marginLeft:20}
    return(
        // <div>
        //     <button onClick={() => props.actionPon(0)} >グー</button>
        //     <button onClick={() => props.actionPon(1)} >チョキ</button>
        //     <button onClick={() => props.actionPon(2)} >パー</button>
        // </div>
        <div style={{marginTop:40, marginBottom:30, marginLeft:30}}>
            <RaisedButton label="グー" onClick={() => props.actionPon(0)} style={style} />
            <RaisedButton label="チョキ" onClick={() => props.actionPon(1)} style={style} />
            <RaisedButton label="パー" onClick={() => props.actionPon(2)} style={style} />
        </div>
    )
}

JyankenBox.propTypes = {
    actionPon:PropTypes.func
}

// const ScoreBox = (props) => {
//     const teString = ["グー","チョキ","パー"]
//     const judgmentString = ["引き分け","勝ち","負け"]
//     return(
//      <table>
//          <tbody>
//              <tr><th>あなた</th><td>{teString[props.human]}</td></tr>
//              <tr><th>Computer</th><td>{teString[props.computer]}</td></tr>
//              <tr><th>勝敗</th><td>{judgmentString[props.judgment]}</td></tr>
//          </tbody>
//      </table>   
//     )
// }
// ScoreBox.propTypes = {
//     human: PropTypes.number,
//     computer: PropTypes.number,
//     judgment: PropTypes.number,
// }


const ScoreList = (props) => (
    <Table>
        <TableHeader adjustForCheckbox={false} displaySelectAll={false}>
            <TableRow>
                <TableHeaderColumn>時間</TableHeaderColumn><TableHeaderColumn>人間</TableHeaderColumn><TableHeaderColumn>コンピューター</TableHeaderColumn><TableHeaderColumn>結果</TableHeaderColumn>
            </TableRow>    
        </TableHeader>
        <TableBody>
            {props.scores.map((score,ix) => <ScoreListItem key = {ix} score={score} />)}
        </TableBody>
    </Table>
)

ScoreList.propTypes={
    scores: PropTypes.array
}


const ScoreListItem=(props) => {
    const teString = ["グー","チョキ","パー"]
    const judgmentString = ["引き分け","勝ち","負け"]
    const dateHHMMSS = (d) => d.toTimeString().substr(0,8)
    return (
        <TableRow style={judgmentStyle(props.score.judgment)}>
            <TableRowColume>{dateHHMMSS(props.score.created_at)}</TableRowColume>
            <TableRowColume>{teString[props.score.human]}</TableRowColume>
            <TableRowColume>{teString[props.score.computer]}</TableRowColume>
            <TableRowColume>{judgmentString[props.score.judgment]}</TableRowColume>
        </TableRow>
    )
}

ScoreListItem.propTypes = {
    score: PropsTypes.object
}

const judgmentStyle = (judgment) => ({color: ["#000","#2979FF","#FF1744"][judgment]})

ReactDOM.render(
    <JyankenGamePage />,
    document.getElementById('root')
)