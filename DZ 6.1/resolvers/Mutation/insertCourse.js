// const { GraphQLString } = require('graphql');
const { GraphQLObjectType, GraphQLInt, GraphQLString, GraphQLList } = require('graphql');
const { dbQuery } = require('../../database');
const { CourseType } = require('../../types');

const insertCourse = {
  type: CourseType,
  args: {
    Name: { type: GraphQLString },
    professor: { type: GraphQLInt },
    departament: { type: GraphQLInt }
  },
  async resolve(_, { Name, professor, departament}){
    let res = await dbQuery(`insert into Courses (name, Professors_ProfessorId, Departaments_DepartamentId) values ('${Name}', '${professor}', '${departament}')`);
    return { id: res.insertId, Name, professor, departament}
  }
};

module.exports = insertCourse;