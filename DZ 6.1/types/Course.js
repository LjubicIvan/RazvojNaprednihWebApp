const { GraphQLObjectType, GraphQLInt, GraphQLString, GraphQLList } = require('graphql');
const { dbQuery } = require('../database');
const ProfessorType = require('./Professor');
const DepartamentType = require('./Departament');

const CourseType = new GraphQLObjectType({
  name: 'Course',
  fields:() => (
    {
      CourseId: { type: GraphQLInt },
      Name: { type: GraphQLString },
      professor: {
        type: ProfessorType,
          resolve: async (course) => {
            let res = await dbQuery(`SELECT * FROM professors WHERE ProfessorId = ${parseInt(course.Professors_ProfessorId)}`);
            return res[0];
          }
      },
      departament: {
        type: DepartamentType,
          resolve: async (course) => {
            let res = await dbQuery(`SELECT * FROM departaments WHERE DepartamentId = ${parseInt(course.Departaments_DepartamentId)}`);
            return res[0];
          }
      }
    }
  ) 
});

module.exports = CourseType;